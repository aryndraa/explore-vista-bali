<?php

namespace App\Filament\Resources\Shuttles;

use App\Filament\Resources\Shuttles\Pages\CreateShuttle;
use App\Filament\Resources\Shuttles\Pages\EditShuttle;
use App\Filament\Resources\Shuttles\Pages\ListShuttles;
use App\Filament\Resources\Shuttles\Pages\ViewShuttle;
use App\Filament\Resources\Shuttles\RelationManagers\VehiclesRelationManager;
use App\Filament\Resources\Shuttles\Schemas\ShuttleForm;
use App\Filament\Resources\Shuttles\Tables\ShuttlesTable;
use App\Models\Shuttle;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
    
class ShuttleResource extends Resource
{
    protected static ?string $model = Shuttle::class;

    protected static string|BackedEnum|null $navigationIcon = 'gmdi-car-crash';

    protected static string | \UnitEnum | null $navigationGroup = 'Resources';

    protected static ?string $label = "Shuttle Manager";

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?int $navigationSort = 3;

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return ShuttleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ShuttlesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            VehiclesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListShuttles::route('/'),
            'create' => CreateShuttle::route('/create'),
            'view'   => ViewShuttle::route('/{record}'),
            'edit'   => EditShuttle::route('/{record}/edit'),
        ];
    }
}
