<?php

namespace App\Http\Controllers\Web\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Link;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hooks = [
            'journeys' => 90,
            'places' => 20,
            'tourist' => 50
        ];

        $tourPackages = Package::query()
            ->take(6)
            ->get();

        $testimonials = Testimonial::query()
            ->take(6)
            ->get();

        $galleries = Gallery::query()
            ->latest()
            ->take(4)
            ->get();

        $blogs = Blog::query()
            ->latest()
            ->take(4)
            ->get();

        return view('index', [
            'hooks' => $hooks,
            'tourPackages' => $tourPackages,
            'testimonials' => $testimonials,
            'galleries' => $galleries,
            'blogs' => $blogs
        ]); 
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'phone'    => 'required|string|max:20',
            'email'    => 'nullable|email|max:255',
            'message'  => 'required|string|max:1000',
        ]);

        $waNumber = Link::query()
            ->where('name', 'wa')
            ->pluck('url')
            ->first(); 

        $text = "Hello, my name is *{$validated['fullname']}*.\n"
              . "Phone: {$validated['phone']}\n"
              . (!empty($validated['email']) ? "Email: {$validated['email']}\n" : '')
              . "Message:\n{$validated['message']}";

        $encodedText = urlencode($text);

        $waLink = "https://wa.me/{$waNumber}?text={$encodedText}";

        return redirect()->away($waLink);
    }

    public function redirectToWhatsapp()
    {
        $phone = Link::query()
            ->where('name', 'wa')
            ->pluck('url')
            ->first(); 

        $url = "https://wa.me/{$phone}";

        return redirect()->away($url);
    }
}
