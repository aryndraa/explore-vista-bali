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

                Section::make([
                    SpatieMediaLibraryFileUpload::make('icon')
                        ->label('Shuttle Icon')
                        ->collection('shuttle-icons')
                        ->deletable()
                        ->imageCropAspectRatio('1:1')
                        ->maxFiles(1)
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('banner')
                        ->label('Shuttle Banner')
                        ->collection('shuttle-banners')
                        ->deletable()
                        ->imageCropAspectRatio('16:9')
                        ->maxFiles(1)
                        ->columnSpan(2)
                        ->required()
                ])
                ->columns(3)
                ->columnSpanFull()
            ]);
    }
}
