<?php

namespace App\Filament\Resources\ShuttleBookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class ShuttleBookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('shuttle_id')
                    ->required()
                    ->numeric(),
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
                TimePicker::make('pickup_time')
                    ->required(),
                TextInput::make('people_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('from')
                    ->required(),
                TextInput::make('to')
                    ->required(),
                TextInput::make('vehicle_id')
                    ->required()
                    ->numeric(),
                TextInput::make('package_id')
                    ->numeric(),
                TextInput::make('status')
                    ->default('pending'),
            ]);
    }
}
