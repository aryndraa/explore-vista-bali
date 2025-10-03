<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('index'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');

Route::prefix('services')
    ->name('services.')
    ->group(function () {
        Route::get('/tour-package', fn() => view('services.tour-package'))
            ->name('tour-package');
    });

Route::get('/gallery', fn() => view('gallery'))->name('gallery');
