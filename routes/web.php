<?php

use Illuminate\Support\Facades\Route;

Route::multilingual('/', 'ShowDemoPageController')->name('home');
Route::multilingual('test', 'ShowDemoPageController');
Route::multilingual('show-user', 'ShowUserController')->name('user.show');
