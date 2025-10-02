<?php

namespace App\Filament\Resources\VehicleRentals\Schemas;

use App\Models\Vehicle;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class VehicleRentalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make([
                    Section::make([
                        Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'confirmed' => 'Confirmed',
                                'cancelled' => 'Cancelled',
                                'completed' => 'Completed',
                            ])
                            ->default('pending')
                            ->required()
                            ->native(false)
                            ->disablePlaceholderSelection()
                            ->columnSpanFull()
                            ->columnSpanFull(),
                    ]),
                        
                    Section::make([
                        TextInput::make('customer_name')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('customer_phone')
                            ->tel()
                            ->required(),
                        TextInput::make('customer_email')
                            ->email(),
                    ])
                    ->columns(2),
                ]),
               
               Section::make([
                 Select::make('vehicle_id')
                    ->label('Vehicle')
                    ->relationship('vehicle', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                   DatePicker::make('rental_date')
                    ->required(),
                   DatePicker::make('return_date')
                    ->required(),
                ])
            ]);
    }
}
