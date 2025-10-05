<?php

namespace App\Filament\Resources\VehicleRentals\Pages;

use App\Filament\Resources\VehicleRentals\VehicleRentalResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVehicleRental extends ViewRecord
{
    protected static string $resource = VehicleRentalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
