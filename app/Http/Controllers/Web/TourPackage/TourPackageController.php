<?php

namespace App\Http\Controllers\Web\TourPackage;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourPackage\BookingRequest;
use App\Models\Agent;
use App\Models\Link;
use App\Models\Package;
use App\Models\TourBooking;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function index()
    {
        return view("services.available-package");
    }

    public function show(Package $package)
    {
        $package->load([
            'destinations' => function ($query) {
                $query->orderBy('sort_order');
            },
        ]);

        $randomPackages = Package::where('id', '!=', $package->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        
        $fullyBookedDates = TourBooking::select('booking_date')
            ->groupBy('booking_date')
            ->havingRaw('COUNT(*) >= ?', [Agent::count()])
            ->pluck('booking_date')
            ->toArray();

        return view('services.package-detail', [
            'package' => $package,
            'randomPackages' => $randomPackages,
            'fullyBookedDates' => $fullyBookedDates,
        ]);
    }

    public function booking(Package $package, BookingRequest $request)
    {
        $booking = $package->bookings()->create([
            'customer_name' => $request->input('customer_name'),
            'address' => $request->input('address'),
            'customer_phone' => $request->input('customer_phone'),
            'customer_email' => $request->input('customer_email'),
            'booking_date' => $request->input('booking_date'),
            'people_amount' => $request->input('people_amount'),
            'status' => 'pending', // default status
        ]);


        $message = "Hello, I would like to confirm my tour booking:\n\n"
            . "*Package:* {$package->title}\n"
            . "*Name:* {$booking->customer_name}\n"
            . "*Phone:* {$booking->customer_phone}\n"
            . "*Email:* {$booking->customer_email}\n"
            . "*Address:* {$booking->address}\n"
            . "*Booking Date:* " . \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') . "\n"
            . "*People:* {$booking->people_amount}\n\n"
            . "Please confirm my booking. Thank you!";

        $adminPhone = Link::query()
            ->where('name', 'wa')
            ->pluck('url')
            ->first(); 

        $waUrl = 'https://wa.me/' . $adminPhone . '?text=' . urlencode($message);

        return redirect()->away($waUrl);
    }
}
