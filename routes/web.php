<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\LoginRequest;

Route::get('/', [LoginRequest::class, 'index']);

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/home', function () {
$users = [
    ["name"=> "ken","role"=> "dev", "id" => "0001"],
    ["name"=> "mark","role"=> "dev", "id" => "0002"],
    ["name"=> "zach","role"=> "dev", "id" => "0003"],
];

return view('users.home',["users" => $users]);
});

Route::get('/register', function () {
    return view('pages.register');
});



