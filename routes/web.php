<?php

use Illuminate\Support\Facades\Route;

Route::get(uri: '/', [\App\Http\Controllers\SiteController::class, 'index']);