<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('activities', ActivityController::class);

Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::get('/activities/{id}', [ActivityController::class, 'show'])->name('activities.show');
Route::get('/activities/create', [ActivityController::class, 'create'])->name('activities.create');
Route::get('/activities/edit/{id}', [ActivityController::class, 'edit'])->name('activities.edit');

Route::get('/', function () { return view('hotel.home');});
Route::get('/about', function () { return view('hotel.about'); })->name('about');
Route::get('/contact', function () { return view('hotel.contact'); })->name('about');
Route::get('/offers', function () { return view('hotel.offers');})->name('offers');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/roomDetails', [RoomController::class, 'show'])->name('roomDetails');

require __DIR__.'/auth.php';
