<?php

namespace App\Filament\Resources\VehicleRentals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class VehicleRentalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_name')
                    ->searchable(),
                TextColumn::make('vehicle.name'),
                TextColumn::make('rental_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('return_date')
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
                 SelectFilter::make('vehicle_id')
                    ->label('Vehicle')
                    ->relationship('vehicle', 'name')
                    ->preload()
                    ->searchable(),

                Filter::make('rental_date')
                    ->form([
                        Section::make([
                            DatePicker::make('from')->label('From Date'),
                            DatePicker::make('until')->label('Until Date'),
                        ])
                        ->columns(2)
                        ->columnSpanFull()
                        ->label('Rental Date')
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['from'], fn ($q, $date) => $q->whereDate('rental_date', '>=', $date))
                            ->when($data['until'], fn ($q, $date) => $q->whereDate('rental_date', '<=', $date));
                    }),
            ])
            ->filtersFormWidth('lg')
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
