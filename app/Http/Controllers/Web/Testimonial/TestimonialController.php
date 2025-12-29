<?php

namespace App\Http\Controllers\Web\Testimonial;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::query()
            ->where('is_active', true)
            ->latest()
            ->get();

        return view('comment', ['testimonials' => $testimonials]);
    }

    public function makeComment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'social_media' => 'nullable|string|max:255',
            'comment' => 'required|string',
        ]);

        $comment = Testimonial::create([
            'name' => $validated['name'],
            'social_media' => $validated['social_media'] ?? null,
            'comment' => $validated['comment'],
            'is_active' => false, 
        ]);

        return back();
    }
}
