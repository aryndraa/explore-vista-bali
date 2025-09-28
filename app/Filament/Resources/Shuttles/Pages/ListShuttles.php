<?php

namespace App\Filament\Resources\Shuttles\Pages;

use App\Filament\Resources\Shuttles\ShuttleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListShuttles extends ListRecords
{
    protected static string $resource = ShuttleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
