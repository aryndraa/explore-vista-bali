<?php

namespace App\Filament\Resources\Vehicles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class VehiclesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->label('Image')
                    ->collection('vehicles')
                    ->height(100)
                    ->limit(1),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('type')
                    ->formatStateUsing(fn ($state) => ucwords(strtolower($state)))
                    ->color(fn ($state) => match (strtolower($state)) {
                        'motorcycle' => 'warning',
                        'car'        => 'success',
                        'bike'       => 'info',
                        default      => 'secondary',
                    })
                    ->badge(),
                TextColumn::make('person')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('price_per_day')
                    ->numeric()
                    ->prefix('$')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Type')
                    ->options([
                        'motorcycle' => 'Motorcycle',
                        'car'        => 'Car',
                        'bike'       => 'Bike',
                    ]),

                SelectFilter::make('person')
                    ->label('Person')
                    ->options([
                        1 => '1',
                        2 => '2',
                        4 => '4',
                        6 => '6',
                    ]),

                Filter::make('price_per_day')
                    ->form([
                        TextInput::make('min_price')
                            ->numeric()
                            ->prefix('$')
                            ->placeholder('Min Price'),
                        TextInput::make('max_price')
                            ->numeric()
                            ->prefix('$')
                            ->placeholder('Max Price'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['min_price'], fn ($q, $min) => $q->where('price_per_day', '>=', $min))
                            ->when($data['max_price'], fn ($q, $max) => $q->where('price_per_day', '<=', $max));
                    }),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
