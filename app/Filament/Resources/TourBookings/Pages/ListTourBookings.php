<?php

namespace App\Filament\Resources\TourBookings\Pages;

use App\Filament\Resources\TourBookings\TourBookingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;

class ListTourBookings extends ListRecords
{
    protected static string $resource = TourBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Add Booking')
        ];
    }

    public function getTabs(): array
    {
        return [
            'all'       => Tab::make('All Bookings'),
            'pending'   => Tab::make('Pending')->modifyQueryUsing(fn ($query) => $query->where('status', 'pending'))->badge(fn () => \App\Models\TourBooking::where('status', 'pending')->count()),
            'confirmed' => Tab::make('Confirmed')->modifyQueryUsing(fn ($query) => $query->where('status', 'confirmed')),
            'completed' => Tab::make('Completed')->modifyQueryUsing(fn ($query) => $query->where('status', 'completed')),
            'ongoing'   => Tab::make('Ongoing')->modifyQueryUsing(fn ($query) => $query->where('status', 'ongoing')),
            'expired'   => Tab::make('Expired')->modifyQueryUsing(fn ($query) => $query->where('status', 'expired')),
            'cancelled' => Tab::make('Cancelled')->modifyQueryUsing(fn ($query) => $query->where('status', 'cancelled')),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return 'all';
    }
}
