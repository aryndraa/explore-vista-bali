<?php

namespace App\Filament\Resources\TourBookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TourBookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('package_id')
                    ->relationship('package', 'name')
                    ->required(),
                TextInput::make('customer_name')
                    ->required(),
                TextInput::make('customer_phone')
                    ->tel()
                    ->required(),
                TextInput::make('customer_email')
                    ->email()
                    ->required(),
                DatePicker::make('booking_date')
                    ->required(),
                TextInput::make('people_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('status')
                    ->default('pending'),
            ]);
    }
}
