<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('services', \App\Http\Controllers\ServiceController::class);

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function (){
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
});
