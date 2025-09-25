<?php

namespace App\Filament\Resources\Packages\RelationManagers;

use App\Filament\Resources\Packages\PackageResource;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use function Laravel\Prompts\form;

class PlacesRelationManager extends RelationManager
{
    protected static string $relationship = 'places';

    protected static ?string $label = 'Package Locations';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('place_id')
                    ->label('Place')
                    ->relationship('place', 'name') // relasi dari PackagePlace ke Place
                    ->searchable()
                    ->preload()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('place.name')
                    ->label('Place')
                    ->searchable(query: function ($query, string $search): void {
                        $query->whereHas('place', fn ($q) => $q->where('name', 'like', "%{$search}%"));
                    }),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Add Location'),
            ]);
    }
}
