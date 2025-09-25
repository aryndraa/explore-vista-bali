<?php

namespace App\Filament\Resources\Packages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Tour Name')
                    ->searchable(),
                TextColumn::make('tour.name')
                    ->label('Tour Category')
                    ->badge()
                    ->color('#ffff'),
                TextColumn::make('start_time')
                    ->time()
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
                    ])
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
