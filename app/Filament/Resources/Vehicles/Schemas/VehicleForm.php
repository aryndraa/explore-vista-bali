<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->required(),
                Select::make('type')
                    ->options(['car' => 'Car', 'motorcycle' => 'Motorcycle', 'bike' => 'Bike'])
                    ->required(),
                TextInput::make('person')
                    ->label('Limit Person')
                    ->required()
                    ->numeric(),
                TextInput::make('price_per_day')
                    ->prefix('$')
                    ->required()
                    ->numeric(),

                SpatieMediaLibraryFileUpload::make('image')
                    ->label('Vehicle Image')
                    ->collection('vehicles') // nama koleksi Spatie
                    ->image()
                    ->maxFiles(1)
                    ->imageCropAspectRatio('16:9')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}
