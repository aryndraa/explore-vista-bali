<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\ShuttleBookings\Pages\ViewShuttleBooking;
use App\Filament\Resources\ShuttleBookings\ShuttleBookingResource;
use App\Models\ShuttleBooking;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class ShuttleBookingPendingTable extends TableWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Pending Shuttle Bookings';

    protected static ?int $sort = 3;

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => ShuttleBooking::query()->where('status', 'pending'))
            ->columns([
                 TextColumn::make('customer_name'),
                 TextColumn::make('shuttle.name'),
                 TextColumn::make('booking_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('pickup_time')
                    ->time('H:i')
                    ->suffix(' WITA')
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

            ])
            ->defaultPaginationPageOption(5)
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                  Action::make('view')
                    ->label('View')
                    ->url(fn ($record): string => ShuttleBookingResource::getUrl('view', ['record' => $record]))
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
            'view' => ViewShuttleBooking::route('/{recorde}'),
        ];
    }
}
