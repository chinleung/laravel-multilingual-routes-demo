<?php

use App\Http\Controllers\ShowDemoPageController;
use App\Http\Controllers\ShowUserController;
use Illuminate\Support\Facades\Route;

Route::multilingual('/', ShowDemoPageController::class)->name('home');
Route::multilingual('test', ShowDemoPageController::class);
Route::multilingual('show-user', ShowUserController::class)->name('user.show');
