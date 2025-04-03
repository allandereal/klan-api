<?php

use App\Http\Controllers\ViolationActionController;
use Illuminate\Support\Facades\Route;

Route::resource('violation-actions', ViolationActionController::class)
    ->only(['index', 'store']);
