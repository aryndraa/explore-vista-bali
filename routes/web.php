<?php

use App\Http\Controllers\Web\Blog\BlogController;
use App\Http\Controllers\Web\Contact\ContactController;
use App\Http\Controllers\Web\Gallery\GalleryController;
use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\Shuttle\ShuttleController;
use App\Http\Controllers\Web\Testimonial\TestimonialController;
use App\Http\Controllers\Web\TourPackage\TourPackageController;
use App\Http\Controllers\Web\Vehicle\VehicleController;
use App\Models\Shuttle;
use App\Models\Testimonial;
use App\Models\Tour;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', fn() => view('about'))->name('about');

Route::name('services.')
    ->group(function () {
        Route::post('/package-detail/{package}/book', [TourPackageController::class,'booking'])
            ->name('package-booking');

        Route::get('/available-packages', [TourPackageController::class, 'index'])
            ->name('available-packages');

        Route::get('/package-detail/{package}', [TourPackageController::class,'show'])
            ->name('package-detail');

        Route::get('/shuttle', [ShuttleController::class, 'index'])
            ->name('shuttle');

        Route::get('/shuttle-form', [ShuttleController::class, 'form'])
            ->name('shuttle-form');

        Route::post('/shuttle-form/booking', [ShuttleController::class, 'booking'])
            ->name('shuttle-booking');

        Route::get('/vehicle-rent', [VehicleController::class, 'index'])
            ->name('vehicle-rent');
    });

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/comments', [TestimonialController::class, 'index'])->name('comment');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blog-detail');
Route::post('/testimonials', [TestimonialController::class, 'makeComment'])->name('testimonials.store');
Route::post('/send-whatsapp', [HomeController::class, 'sendMessage'])->name('whatsapp.send');
Route::get('/redirect-whatsapp', [HomeController::class, 'redirectToWhatsapp'])->name('whatsapp.redirect');
