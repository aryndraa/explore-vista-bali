<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('index'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');

Route::name('services.')
    ->group(function () {
        Route::get('/available-packages', fn() => view('services.available-package'))
            ->name('available-packages');
        Route::get('/package-detail', fn() => view('services.package-detail'))
            ->name('package-detail');

        Route::get('/shuttle', fn() => view('services.shuttle'))
            ->name('shuttle');
        Route::get('/shuttle-form', fn() => view('services.shuttle-form'))
            ->name('shuttle-form');

        Route::get('/vehicle-rent', fn() => view('services.vehicle-rent'))
            ->name('vehicle-rent');
    });

Route::get('/gallery', fn() => view('gallery'))->name('gallery');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/comments', fn() => view('comment'))->name('comment');
