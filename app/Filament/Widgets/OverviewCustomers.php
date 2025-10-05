<?php

namespace App\Filament\Widgets;

use App\Models\TourBooking;
use App\Models\ShuttleBooking;
use App\Models\VehicleRental;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Support\Collection;

class OverviewCustomers extends ChartWidget
{
    use InteractsWithPageFilters;

    protected static ?int $sort = 1;
    protected ?string $heading = 'Bookings Overview';

    protected int | string | array $columnSpan = 'full';

    protected  ?string $maxHeight = "16rem";

    protected function getData(): array
    {
        $filter = $this->filters['time_range'] ?? 'today';

        // Tentukan rentang waktu
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

        // Buat range tanggal berdasarkan filter
        $dates = match ($filter) {
            'year' => collect(range(1, 12))->map(fn ($m) => Carbon::create()->month($m)->format('M')),
            default => collect(
                Carbon::parse($startDate)
                    ->daysUntil($endDate)
                    ->map(fn ($date) => $date->format('Y-m-d'))
            ),
        };

        // Ambil data berdasarkan range waktu
        $tourData = $this->getBookingCounts(TourBooking::class, 'booking_date', $startDate, $endDate, $dates, $filter);
        $shuttleData = $this->getBookingCounts(ShuttleBooking::class, 'booking_date', $startDate, $endDate, $dates, $filter);
        $rentalData = $this->getBookingCounts(VehicleRental::class, 'rental_date', $startDate, $endDate, $dates, $filter);

        return [
            'datasets' => [
                [
                    'label' => 'Tour Bookings',
                    'data' => $tourData->values(),
                    'borderColor' => '#1d4ed8',
                    'fill' => false,
                    'tension' => 0.4,
                ],
                [
                    'label' => 'Shuttle Bookings',
                    'data' => $shuttleData->values(),
                    'borderColor' => '#16a34a',
                    'fill' => false,
                    'tension' => 0.4,
                ],
                [
                    'label' => 'Car Rentals',
                    'data' => $rentalData->values(),
                    'borderColor' => '#f59e0b',
                    'fill' => false,
                    'tension' => 0.4,
                ],
            ],
            'labels' => $dates->values(),
        ];
    }

    private function getBookingCounts(string $model, string $column, $start, $end, Collection $dates, string $filter): Collection
    {
        $query = $model::query()
            ->whereBetween($column, [$start, $end]);

        // Ambil data mentah dari database
        $raw = match ($filter) {
            'year' => $query
                ->selectRaw('MONTH(' . $column . ') as month, COUNT(*) as total')
                ->groupBy('month')
                ->pluck('total', 'month'),
            default => $query
                ->selectRaw($column . ' as date, COUNT(*) as total')
                ->groupBy('date')
                ->pluck('total', 'date'),
        };

        // Konversi ke koleksi yang punya default 0 jika tidak ada data
        return $dates->mapWithKeys(function ($date, $key) use ($raw, $filter) {
            if ($filter === 'year') {
                $month = $key + 1;
                return [$date => $raw[$month] ?? 0];
            }
            return [$date => $raw[$date] ?? 0];
        });
    }

    protected function getType(): string
    {
        return 'line';
    }
}
