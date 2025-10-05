<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\DB;

class AgentCalendar extends Page
{
    protected static ?string $navigationLabel = 'Booking Calendar';
    protected string $view = 'filament.pages.agent-calendar';

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public function getViewData(): array
    {
        $events = [];

        // === TOUR BOOKINGS ===
        $tourCounts = DB::table('tour_bookings')
            ->select('booking_date', DB::raw('count(*) as total'))
            ->groupBy('booking_date')
            ->get();

        foreach ($tourCounts as $row) {
            $events[] = [
                'title' => "{$row->total} Tour Bookings",
                'start' => $row->booking_date,
                'color' => '#3b82f6', // biru
            ];
        }

        // === SHUTTLE BOOKINGS ===
        $shuttleCounts = DB::table('shuttle_bookings')
            ->select('booking_date', DB::raw('count(*) as total'))
            ->groupBy('booking_date')
            ->get();

        foreach ($shuttleCounts as $row) {
            $events[] = [
                'title' => "{$row->total} Shuttle Bookings",
                'start' => $row->booking_date,
                'color' => '#10b981', // hijau
            ];
        }

        // === VEHICLE RENTALS ===
        $rentalCounts = DB::table('vehicle_rentals')
            ->select('rental_date as booking_date', DB::raw('count(*) as total'))
            ->groupBy('rental_date')
            ->get();

        foreach ($rentalCounts as $row) {
            $events[] = [
                'title' => "{$row->total} Vehicle Rentals",
                'start' => $row->booking_date,
                'color' => '#f59e0b', // kuning
            ];
        }

        return compact('events');
    }
}
