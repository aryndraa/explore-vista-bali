<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                    
                SpatieMediaLibraryFileUpload::make('image')
                    ->label('Picture')
                    ->collection('picture')
                    ->image()
                    ->maxFiles(1)
                    ->imageCropAspectRatio('1:1')
                    ->required(),
                
            ])
            ->columns(1);
    }
}
