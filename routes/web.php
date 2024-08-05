<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaratekaController;

Route::get('/', function () {
    return view('welcome', ['title' => 'SportsData']);
});

Route::get('/team', function () {
    return view('team', ['title' => 'Add Your Team']);
});

Route::get('/projects', function () {
    return view('projects', ['title' => 'Projects']);
});

Route::get('/calendar', function () {
    return view('calendar', ['title' => 'Calendar']);
});

Route::get('/reports', function () {
    return view('reports', ['title' => 'Reports']);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Login Page']);
});

Route::get('/projects', [KaratekaController::class, 'index'])->name('dashboard.index');

Route::post('/team', [KaratekaController::class, 'store']);
