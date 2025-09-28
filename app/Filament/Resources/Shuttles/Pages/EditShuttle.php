<?php

namespace App\Filament\Resources\Shuttles\Pages;

use App\Filament\Resources\Shuttles\ShuttleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditShuttle extends EditRecord
{
    protected static string $resource = ShuttleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
