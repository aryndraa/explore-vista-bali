<?php

namespace App\Filament\Resources\ShuttleBookings;

use App\Filament\Resources\ShuttleBookings\Pages\CreateShuttleBooking;
use App\Filament\Resources\ShuttleBookings\Pages\EditShuttleBooking;
use App\Filament\Resources\ShuttleBookings\Pages\ListShuttleBookings;
use App\Filament\Resources\ShuttleBookings\Pages\ViewShuttleBooking;
use App\Filament\Resources\ShuttleBookings\Schemas\ShuttleBookingForm;
use App\Filament\Resources\ShuttleBookings\Tables\ShuttleBookingsTable;
use App\Models\ShuttleBooking;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ShuttleBookingResource extends Resource
{
    protected static ?string $model = ShuttleBooking::class;

    protected static string|BackedEnum|null $navigationIcon = 'gmdi-airport-shuttle-r';

    protected static ?string $recordTitleAttribute = 'customer_name';

    protected static string | UnitEnum | null $navigationGroup = 'Workspace';

    protected static ?int $navigationSort = 2;

    public static function getNavigationBadge(): ?string
    {
        return (string) ShuttleBooking::where('status', 'pending')->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'primary';
    }

    public static function form(Schema $schema): Schema
    {
        return ShuttleBookingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ShuttleBookingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListShuttleBookings::route('/'),
            'create' => CreateShuttleBooking::route('/create'),
            'edit' => EditShuttleBooking::route('/{record}/edit'),
            'view' => ViewShuttleBooking::route('/{record}'),
        ];
    }
}
