<?php

namespace App\Filament\Resources\Packages\Schemas;

use App\Models\Tour;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Support\Str;

class PackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components(components: [
                Tabs::make('PackageTabs')
                    ->tabs([

                        // Tab Info
                        Tabs\Tab::make('Overview')
                            ->schema([
                                Section::make()
                                    ->columns(2)
                                    ->schema([
                                        Select::make('tour_id')
                                            ->relationship('tour', 'name')
                                            ->required()
                                            ->label('Tour Category'),
                                        TextInput::make('name')
                                            ->required(),
                                        Textarea::make('description')
                                            ->required()
                                            ->columnSpanFull()
                                            ->autosize(),
                                        TimePicker::make('start_time')
                                            ->seconds(false)
                                            ->suffix(' WITA')
                                            ->required(),
                                        TextInput::make('price')
                                            ->required()
                                            ->numeric()
                                            ->prefix('$'),
                                        Textarea::make('notes')
                                            ->label('Notes (optional)')
                                            ->columnSpanFull()
                                            ->autosize(),
                                    ])
                                    ->columnSpan(2),

                                Section::make()
                                    ->schema([
                                        SpatieMediaLibraryFileUpload::make('cover')
                                            ->disk('public')
                                            ->label('Cover Image')
                                            ->collection('cover')
                                            ->image()
                                            ->imageCropAspectRatio('16:9')
                                            ->required(),

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
                                            ->placeholder(fn ($record): mixed => $record?->bookings()->count() ?? 0)
                                            ->hiddenOn(['create', 'edit'])
                                            ->suffix(' Bookings'),
                                    ]),
                            ])->columns(3),

                        // Tab Images
                        Tabs\Tab::make('Pictures')
                            ->schema([
                                Section::make()
                                    ->schema([
                                        SpatieMediaLibraryFileUpload::make('image')
                                            ->label('Package Images')
                                            ->disk('public')
                                            ->collection('packages')
                                            ->multiple()
                                            ->deletable()
                                            ->imageCropAspectRatio('16:9')
                                            ->panelLayout('grid')
                                            ->required()
                                            ->minFiles(3),
                                    ]),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
