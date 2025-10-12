<?php

namespace App\Filament\Resources\Packages\Tables;

use Carbon\Carbon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->label('Image')
                    ->collection('cover')
                    ->height(90)
                    ->limit(1),
                TextColumn::make('name')
                    ->label('Tour Name')
                    ->searchable(),
                TextColumn::make('tour.name')
                    ->label('Tour Category')
                    ->badge()
                    ->color('#ffff'),
                TextColumn::make('start_time')
                    ->suffix(' WITA')
                    ->time('H:i')
                    ->sortable(),
                TextColumn::make('price')
                    ->money()
                    ->sortable(),
                TextColumn::make('is_active')
                    ->label('Status')
                    ->badge()
                    ->color(fn ($record) => $record->is_active ? 'success' : 'danger')
                    ->getStateUsing(fn ($record) => $record->is_active ? 'Active' : 'Inactive'),
            ])
            ->filters([
                SelectFilter::make('tour')
                    ->relationship('tour', 'name')
                    ->label('Tour Category'),

                SelectFilter::make('is_active')
                    ->options([
                        true => 'Active',
                        false => 'Inactive',
                    ]),

                 Filter::make('price')
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
                             ->when($data['min_price'], fn ($q, $min) => $q->where('price', '>=', $min))
                             ->when($data['max_price'], fn ($q, $max) => $q->where('price', '<=', $max));
                     }),

                Filter::make('start_time')
                    ->form([
                        TimePicker::make('start')->label('Start Time')->seconds(false),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['start'], fn ($q, $time) => $q->where('start_time', '>=', $time));
                    })
                    ->indicateUsing(function (array $data): ?string {
                        return $data['start']
                            ? 'Start At ' . Carbon::parse($data['start'])->format('H:i')
                            : null;
                    }),
            ])
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
