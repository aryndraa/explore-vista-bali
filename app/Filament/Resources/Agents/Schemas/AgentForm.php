<?php

namespace App\Filament\Resources\Agents\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AgentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            
                SpatieMediaLibraryFileUpload::make('profile')
                    ->label('Photo Profile')
                    ->collection('profile')
                    ->image()
                    ->maxFiles(1)
                    ->imageCropAspectRatio('1:1')
                    ->required(),

                Section::make([
                    TextInput::make('name')
                    ->columnSpanFull()
                    ->required(),

                    TextInput::make('email')
                    ->unique()
                    ->label('Email address')
                    ->email()
                    ->required(),

                    TextInput::make('phone')
                    ->tel(),
                ])
            ]);
    }
}
