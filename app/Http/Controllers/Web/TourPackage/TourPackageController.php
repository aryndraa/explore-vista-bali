<?php

namespace App\Http\Controllers\Web\TourPackage;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourPackage\BookingRequest;
use App\Models\Agent;
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
        $included = $package->features->where('is_include', true);
        $excluded = $package->features->where('is_include', false);

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
            'included' => $included,
            'excluded' => $excluded,
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

        User::all()->each(function ($admin) use ($booking) {
            Notification::make()
                ->title('New Booking Received')
                ->body("📌 {$booking->customer_name} has booked the package '{$booking->package->title}' on " . \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') . ". People: {$booking->people_amount}.")
                ->sendToDatabase($admin);
        });


        $message = "Hello, I would like to confirm my tour booking:\n\n"
            . "*Package:* {$package->title}\n"
            . "*Name:* {$booking->customer_name}\n"
            . "*Phone:* {$booking->customer_phone}\n"
            . "*Email:* {$booking->customer_email}\n"
            . "*Address:* {$booking->address}\n"
            . "*Booking Date:* " . \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') . "\n"
            . "*People:* {$booking->people_amount}\n\n"
            . "Please confirm my booking. Thank you! 🙏";

        $adminPhone = '6282144915822';
        $waUrl = 'https://wa.me/' . $adminPhone . '?text=' . urlencode($message);

        return redirect()->away($waUrl);
    }
}
