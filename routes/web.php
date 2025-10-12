<?php

use App\Http\Controllers\Web\Shuttle\ShuttleController;
use App\Http\Controllers\Web\TourPackage\TourPackageController;
use App\Models\Shuttle;
use App\Models\Tour;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('index'))->name('home');
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

        Route::get('/vehicle-rent', fn() => view('services.vehicle-rent'))
            ->name('vehicle-rent');
    });

Route::get('/gallery', fn() => view('gallery'))->name('gallery');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/comments', fn() => view('comment'))->name('comment');
