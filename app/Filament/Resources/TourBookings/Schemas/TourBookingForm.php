<?php

namespace App\Filament\Resources\TourBookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;

class TourBookingForm
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
                            ->columnSpanFull()
                            ->disabled(),
                        TextInput::make('customer_phone')
                            ->tel()
                            ->required()
                            ->disabled(),
                        TextInput::make('customer_email')
                            ->email()
                            ->required()
                            ->disabled(),
                        DatePicker::make('booking_date')
                            ->required()
                            ->disabled(),
                        TextInput::make('people_amount')
                            ->required()
                            ->numeric()
                            ->disabled(),
                    ])
                    ->columns(2),
                ])
                ->columnSpan(3),


                Section::make([
                    TextInput::make('name')
                        ->label('Package')
                        ->disabled(),
                    SpatieMediaLibraryFileUpload::make('image')
                        ->label(" ")
                        ->collection('packages')
                        ->disabled()
                ])
                ->relationship('package')
                ->columnSpan(2)
            ])
            ->columns(5);
    }
}
