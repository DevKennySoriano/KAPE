<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\UserController;


    Route::get('/', function () {
        return view('pages.home');
    });

    Route::get('/register', function () {
        return view('pages.register');
    });
    Route::get('/login', function () {
        return view('pages.login');
    });

    Route::post('/register', [RegisterController::class, 'store'])
        ->name('register.store');

    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/dashboard', function () {
        return view('pages.dashboard'); 
    });



Route::get('/dashboard', function () {
    if (!session()->has('user')) {
        return redirect('/login');
    }
    return view('pages.dashboard');
});

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::post('/users/{id}/update', [UserController::class, 'update']);
Route::get('/users/{id}/delete', [UserController::class, 'destroy']);
