<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make([
                    TextInput::make("title")
                        ->label('Blog Title')
                        ->required()
                        ->maxLength(60),
                    TextInput::make("author")
                        ->label('Author Name')
                        ->required(),
                    MarkdownEditor::make("content")
                        ->fileAttachmentsDirectory('blogs')
                ])
                ->columnSpan(3),

                Section::make([
                    SpatieMediaLibraryFileUpload::make('image')
                    ->label('Picture')
                    ->collection('picture')
                    ->image()
                    ->maxFiles(1)
                    ->imageCropAspectRatio('1:1')
                    ->required(),
                ])
                ->columnSpan(2)


            ])
            ->columns(5);
    }
}
