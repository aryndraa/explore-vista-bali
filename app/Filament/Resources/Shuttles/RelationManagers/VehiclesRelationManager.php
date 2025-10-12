<?php

namespace App\Filament\Resources\Shuttles\RelationManagers;

use App\Filament\Resources\Shuttles\ShuttleResource;
use App\Models\Vehicle;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VehiclesRelationManager extends RelationManager
{
    protected static string $relationship = 'vehicles';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('vehicle_id')
                    ->label('Vehicle')
                     ->options(function () {
                        $allVehicles = \App\Models\Vehicle::all();

                        $usedVehicleIds = $this->ownerRecord?->vehicles()->pluck('vehicle_id')->toArray() ?? [];

                        return $allVehicles
                            ->reject(fn ($vehicle) => in_array($vehicle->id, $usedVehicleIds))
                            ->mapWithKeys(fn ($vehicle) => [
                                $vehicle->id => "{$vehicle->name} - {$vehicle->type}",
                            ])
                            ->toArray();
                    })
                    ->searchable()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $vehicle = Vehicle::find($state);
                        if ($vehicle) {
                            $set('start_price', $vehicle->price_per_day);
                        }
                    })
                    ->required(),

                TextInput::make('start_price')
                    ->numeric()
                    ->required()
                    ->prefix('$')
                    ->default(fn ($get) => Vehicle::find($get('vehicle_id'))?->start_price ?? 0),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make()
                ->label('Add Vehicle'),
            ])
            ->columns([
                SpatieMediaLibraryImageColumn::make('vehicle.image')
                    ->label('Image')
                    ->collection('vehicles')
                    ->height(100)
                    ->limit(1),
                TextColumn::make('vehicle.name'),
                TextColumn::make('vehicle.type')
                    ->formatStateUsing(fn ($state) => ucwords(strtolower($state)))
                    ->color(fn ($state) => match (strtolower($state)) {
                        'motorcycle' => 'warning',
                        'car'        => 'success',
                        'bike'       => 'info',
                        default      => 'secondary',
                    })
                    ->badge(),
                TextColumn::make('start_price')
                    ->money()
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
