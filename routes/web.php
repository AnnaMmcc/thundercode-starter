<?php

use App\Http\Controllers\ContactController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::resource('services', \App\Http\Controllers\ServiceController::class);

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function (){
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
});

Route::get('/', function () {
    $services = Service::all()->take(3);
    return view('frontend.home', compact('services'));
});

Route::get('/services', function () {
    $services = Service::all();
    return view('frontend.services', compact('services'));
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});


Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'submitForm']);
