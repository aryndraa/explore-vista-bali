<?php

namespace App\Filament\Resources\Testimonials\Pages;

use App\Filament\Resources\Testimonials\TestimonialResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTestimonial extends ViewRecord
{
    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
             Action::make('toggleActive')
                ->label(fn ($record) => $record->is_active ? 'Deactivate' : 'Activate')
                ->icon(fn ($record) => $record->is_active ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                ->color(fn ($record) => $record->is_active ? 'danger' : 'success')
                ->action(function ($record) {
                    $record->update([
                        'is_active' => ! $record->is_active,
                    ]);
                })
                ->requiresConfirmation()
                ->successNotificationTitle('Status updated!'),
        ];
    }
}
