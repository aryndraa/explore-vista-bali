<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make([
                    TextInput::make('name')
                    ->required(),

                    TextInput::make('social_media')
                    ->required(),

                    Textarea::make('comment')
                    ->required()
                    ->columnSpanFull()
                    ->autosize(),
                ])
                ->columns(2)
                ->columnSpanFull()
            ]);
    }
}
