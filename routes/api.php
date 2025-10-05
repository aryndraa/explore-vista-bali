<?php

use App\Models\Agent;
use App\Models\ShuttleBooking;
use Illuminate\Support\Facades\Route;
use App\Models\TourBooking;
use App\Models\VehicleRental;

Route::get('/bookings-by-date/{date}', function ($date) {
    $tourBookings = TourBooking::whereDate('booking_date', $date)
        ->with(['package:id,name', 'agent:id,name'])
        ->get()
        ->map(function ($booking) {
            return [
                'customer_name' => $booking->customer_name ?? '-',
                'agent_name' => $booking->agent->name ?? '-',
                'package_name' => $booking->package->name ?? '-',
                'status' => $booking->status,
            ];
        });

    $shuttleBookings = ShuttleBooking::whereDate('booking_date', $date)
        ->with(['vehicle:id,name', 'agent:id,name'])
        ->get()
        ->map(function ($booking) {
            return [
                'customer_name' => $booking->customer_name ?? '-',
                'agent_name' => $booking->agent->name ?? '-',
                'vehicle_name' => $booking->vehicle->name ?? '-',
                'status' => $booking->status,
            ];
        });

    $vehicleRentals = VehicleRental::whereDate('rental_date', $date)
        ->with(['vehicle:id,name'])
        ->get()
        ->map(function ($rent) {
            return [
                'customer_name' => $rent->customer_name ?? '-',
                'vehicle_name'  => $rent->vehicle->name ?? '-',
                'status'        => $rent->status ?? '-',
                'rental_date'   => $rent->rental_date ?? '-',
            ];
        });

     return response()->json([
        'date' => $date,
        'bookings' => [
            'tours'     => $tourBookings,
            'shuttles'  => $shuttleBookings,
            'rentals'   => $vehicleRentals,
        ],
    ]);
});