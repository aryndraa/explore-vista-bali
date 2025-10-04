<?php

namespace App\Filament\Resources\VehicleRentals;

use App\Filament\Resources\VehicleRentals\Pages\CreateVehicleRental;
use App\Filament\Resources\VehicleRentals\Pages\EditVehicleRental;
use App\Filament\Resources\VehicleRentals\Pages\ListVehicleRentals;
use App\Filament\Resources\VehicleRentals\Pages\ViewVehicleRental;
use App\Filament\Resources\VehicleRentals\Schemas\VehicleRentalForm;
use App\Filament\Resources\VehicleRentals\Tables\VehicleRentalsTable;
use App\Models\VehicleRental;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class VehicleRentalResource extends Resource
{
    protected static ?string $model = VehicleRental::class;

    protected static string|BackedEnum|null $navigationIcon = 'gmdi-key-r';

    protected static ?string $recordTitleAttribute = 'customer_name';

    protected static string | UnitEnum | null $navigationGroup = 'Workspace';

    protected static ?int $navigationSort = 3;


    public static function getNavigationBadge(): ?string
    {
        return (string) VehicleRental::where('status', 'pending')->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'primary';
    }

    public static function form(Schema $schema): Schema
    {
        return VehicleRentalForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VehicleRentalsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVehicleRentals::route('/'),
            'create' => CreateVehicleRental::route('/create'),
            'view' => ViewVehicleRental::route('/{record}'),
            'edit' => EditVehicleRental::route('/{record}/edit'),
        ];
    }
}
