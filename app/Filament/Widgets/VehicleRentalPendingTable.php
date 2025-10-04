<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\VehicleRentals\Pages\ViewVehicleRental;
use App\Filament\Resources\VehicleRentals\VehicleRentalResource;
use App\Models\VehicleRental;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class VehicleRentalPendingTable extends TableWidget
{
     protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Pending Vehicle Rental';

    protected static ?int $sort = 4;
    
    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => VehicleRental::query()->where('status', 'pending'))
            ->columns([
                TextColumn::make('customer_name'),
                TextColumn::make('vehicle.name'),
                TextColumn::make('rental_date')
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
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                Action::make('view')
                    ->label('View')
                    ->url(fn ($record): string => VehicleRentalResource::getUrl('view', ['record' => $record]))
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
            'view' => ViewVehicleRental::route('/{recorde}'),
        ];
    }
}
