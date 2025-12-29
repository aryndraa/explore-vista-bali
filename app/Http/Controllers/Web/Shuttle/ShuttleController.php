<?php

namespace App\Http\Controllers\Web\Shuttle;

use App\Models\Shuttle;
use Illuminate\Http\Request;
use App\Models\ShuttleBooking;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shuttle\BookingRequest;
use App\Models\Link;
use App\Models\User;
use Filament\Notifications\Notification;

class ShuttleController extends Controller
{
    public function index()
    {
        return view("services.shuttle");
    }

    public function form(Request $request) 
    {
        $type = $request->get('type') ;

        $shuttle = Shuttle::query()
            ->where('name', $type)
            ->with(['vehicles' => function ($query) {
                $query->whereHas('vehicle', function ($q) {
                    $q->where('is_active', true);
                })->with(['vehicle' => function ($q) {
                    $q->where('is_active', true);
                }]);
            }])
            ->first();


        return view("services.shuttle-form", ['shuttle' => $shuttle]);
    }

    public function booking(BookingRequest $request)
    {
        $booking = ShuttleBooking::query()->create($request->all());
        
        $shuttle = $booking->shuttle ?? null;
        $vehicle = $booking->vehicle ?? null;

        $shuttleType = $shuttle ? ucfirst($shuttle->type) : 'Shuttle';
        $vehicleName = $vehicle ? "{$vehicle->type} - {$vehicle->name}" : 'Not specified';

        $message = "Hello, I would like to confirm my shuttle booking:\n\n"
        . "*Shuttle Type:* {$shuttleType}\n"
        . "*Name:* {$booking->customer_name}\n"
        . "*Phone:* {$booking->customer_phone}\n"
        . "*Email:* {$booking->customer_email}\n"
        . "*From:* {$booking->from}\n"
        . "*To:* {$booking->to}\n"
        . "*Booking Date:* " . \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') . "\n"
        . "*Pickup Time:* {$booking->pickup_time} WITA\n"
        . "*People:* {$booking->people_amount}\n"
        . "*Vehicle:* {$vehicleName}\n\n"
        . "Please confirm my booking. Thank you!";


        $adminPhone = Link::query()
            ->where('name', 'wa')
            ->pluck('url')
            ->first(); 
        $waUrl = 'https://wa.me/' . $adminPhone . '?text=' . urlencode($message);

        return redirect()->away($waUrl);
    }
}
