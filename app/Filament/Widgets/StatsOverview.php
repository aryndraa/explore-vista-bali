<?php

namespace App\Filament\Widgets;

use App\Models\TourBooking;
use App\Models\ShuttleBooking;
use App\Models\VehicleRental;
use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    use InteractsWithPageFilters;

    protected static ?int $sort = 0;

    protected function getStats(): array
    {
        $filter = $this->filters['time_range'] ?? 'today';

        $startDate = match ($filter) {
            'week' => Carbon::now()->startOfWeek(),
            'month' => Carbon::now()->startOfMonth(),
            'year' => Carbon::now()->startOfYear(),
            default => Carbon::today(),
        };

        $endDate = match ($filter) {
            'week' => Carbon::now()->endOfWeek(),
            'month' => Carbon::now()->endOfMonth(),
            'year' => Carbon::now()->endOfYear(),
            default => Carbon::today(),
        };

        // Get total within selected range
        $totalTourBooking = TourBooking::whereBetween('booking_date', [$startDate, $endDate])->count();
        $totalShuttleBooking = ShuttleBooking::whereBetween('booking_date', [$startDate, $endDate])->count();
        $totalCarRental = VehicleRental::whereBetween('rental_date', [$startDate, $endDate])->count();

        // Get today's total (always today, regardless of filter)
        $today = Carbon::today();
        $todayTour = TourBooking::whereDate('booking_date', $today)->count();
        $todayShuttle = ShuttleBooking::whereDate('booking_date', $today)->count();
        $todayRental = VehicleRental::whereDate('rental_date', $today)->count();

        return [
            Stat::make('Tour Bookings', $totalTourBooking)
                ->description("{$todayTour} tours booked today")
                ->color('primary'),

            Stat::make('Shuttle Bookings', $totalShuttleBooking)
                ->description("{$todayShuttle} shuttles booked today")
                ->color('primary'),

            Stat::make('Car Rentals', $totalCarRental)
                ->description("{$todayRental} cars rented today")
                ->color('primary'),
        ];
    }
}
