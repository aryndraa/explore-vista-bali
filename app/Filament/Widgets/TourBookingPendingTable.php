<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\TourBookings\Pages\ViewTourBooking;
use App\Filament\Resources\TourBookings\TourBookingResource;
use App\Models\TourBooking;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class TourBookingPendingTable extends TableWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Pending Tour Bookings';

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => TourBooking::query()->where('status', 'pending'))
            ->columns([
                TextColumn::make('customer_name'),
                TextColumn::make('package.name'),
                TextColumn::make('booking_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->formatStateUsing(fn ($state) => ucfirst($state))
                    ->color(fn ($state) => match ($state) {
                        'pending'   => 'warning',
                        'confirmed' => 'success',
                        'cancelled' => 'danger',
                        'completed' => 'info',
                        'expired'   => 'secondary',
                        'ongoing'   => 'primary',
                        default     => 'gray',
                    })
                    ->tooltip(fn ($state) => match ($state) {
                        'pending'   => 'Waiting for payment or confirmation.',
                        'confirmed' => 'Booking has been confirmed and paid.',
                        'cancelled' => 'Booking has been cancelled.',
                        'completed' => 'The trip has been completed.',
                        'expired'   => 'Booking expired due to timeout.',
                        'ongoing'   => 'The trip is currently in progress.',
                        default     => 'Unknown status.',
                    }),
                  TextColumn::make('created_at')
                    ->date()
                    ->label('Requested At')
                    ->sortable()
            ])
            ->defaultPaginationPageOption(5)
            ->filters([
                //
            ])
            ->headerActions([
                
            ])
            ->recordActions([
                Action::make('view')
                    ->label('View')
                    ->url(fn ($record): string => TourBookingResource::getUrl('view', ['record' => $record]))
                    ->icon('heroicon-o-eye')
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }

     public static function getPages(): array
    {
        return [
            'view' => ViewTourBooking::route('/{recorde}'),
        ];
    }

}
