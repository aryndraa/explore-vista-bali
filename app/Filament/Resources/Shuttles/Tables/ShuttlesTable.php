<?php

namespace App\Filament\Resources\Shuttles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ShuttlesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
            ])
            ->filters([
                TrashedFilter::make()
            ])
            ->recordActions([
                ViewAction::make()
                    ->visible(fn ($record) => $record->deleted_at === null),
                EditAction::make()
                    ->visible(fn ($record) => $record->deleted_at === null),
                RestoreAction::make()
                    ->visible(fn ($record) => $record && $record->deleted_at !== null),
                ForceDeleteAction::make()
                    ->visible(fn ($record) => $record && $record->deleted_at !== null),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ]),
            ]);
    }
}
