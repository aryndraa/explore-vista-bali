<?php

namespace App\Filament\Resources\ShuttleBookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ShuttleBookingForm
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
                            ->required(),
                        TextInput::make('customer_phone')
                            ->tel()
                            ->required(),
                        TextInput::make('customer_email')
                            ->email()
                            ->required(),
                        TextInput::make('people_amount')
                            ->required()
                            ->numeric(),
                    ])
                    ->disabled(),
                ]),

                Group::make([
                    Section::make([
                        TextInput::make('name')
                            ->label('Shuttle Package')
                            ->disabled()
                    ])
                    ->relationship('shuttle'),

                    Section::make([
                        DatePicker::make('booking_date')
                            ->required(),

                        TimePicker::make('pickup_time')
                            ->required()
                            ->suffix('WITA'),
                    
                        TextInput::make('from')
                            ->required()
                            ->columnSpanFull(),

                        TextInput::make('to')
                            ->required()    
                            ->columnSpanFull(),
                    ])
                    ->disabled()
                    ->columns(2),

                    Section::make([
                        TextInput::make('name')
                            ->required(),

                        SpatieMediaLibraryFileUpload::make('image')
                            ->label('Vehicle Image')
                            ->collection('vehicles') 
                            ->image()
                            ->maxFiles(1)
                            ->imageCropAspectRatio('16:9')
                            ->columnSpanFull()
                            ->required(),
                        
                    ])
                    ->relationship('vehicle')
                    ->disabled()
                ])

            ]);
    }
}
