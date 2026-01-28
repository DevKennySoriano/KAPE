<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/register', function () {
    return view('pages.register');
});


Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
