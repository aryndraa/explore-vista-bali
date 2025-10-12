<?php

namespace App\Filament\Resources\Shuttles\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ShuttleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make([
                    TextInput::make('name')
                        ->required(),
                    Textarea::make('description')
                        ->required()
                        ->autosize()
                        ->columnSpanFull(),
                ])
                ->columnSpanFull(),
            ]);
    }
}
