<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

Route::middleware('api')->group(function () {
    Route::post('/activities', [ActivityController::class, 'store']);
    Route::get('/activities', [ActivityController::class, 'index']);
});