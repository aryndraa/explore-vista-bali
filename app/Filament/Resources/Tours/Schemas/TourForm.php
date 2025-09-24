<?php

namespace App\Filament\Resources\Tours\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TourForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->columnSpan(2)
                    ->required(),
            ]);
    }
}
