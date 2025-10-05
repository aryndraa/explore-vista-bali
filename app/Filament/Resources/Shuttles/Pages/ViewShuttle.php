<?php

namespace App\Filament\Resources\Shuttles\Pages;

use App\Filament\Resources\Shuttles\ShuttleResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewShuttle extends ViewRecord
{
    protected static string $resource = ShuttleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
