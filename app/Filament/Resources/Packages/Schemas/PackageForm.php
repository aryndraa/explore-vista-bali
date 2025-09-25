<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columnSpan(2)
                    ->columns(2)
                    ->schema([
                        Select::make('tour_id')
                            ->relationship('tour', 'name')
                            ->required(),
                        TextInput::make('name')
                            ->required(),
                        Textarea::make('description')
                            ->required()
                            ->columnSpanFull()
                            ->autosize(),
                        TimePicker::make('start_time')
                            ->required(),
                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('$'),
                        Textarea::make('notes')
                            ->label('Notes (optional)')
                            ->columnSpanFull()
                            ->autosize(),
                    ]),

                Section::make()
                    ->schema([
                        Select::make('is_active')
                            ->label('Status')
                            ->options([
                                true => 'Active',
                                false => 'Inactive',
                            ])
                            ->required(),

                        TextInput::make('bookings_count')
                            ->label('Total Bookings')
                            ->disabled()
                            ->placeholder(fn ($record) => $record?->bookings()->count() ?? 0),
                    ]),

                Section::make()
                    ->columnSpan(3)
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('image')
                            ->label('Package Images')
                            ->collection('packages')
                            ->multiple()
                            ->deletable()
                            ->imageCropAspectRatio('16:9')
                            ->panelLayout('grid')
                    ])
            ])
            ->columns(3);
    }
}
