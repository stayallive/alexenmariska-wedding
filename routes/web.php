<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::post('signin', Controllers\SignIn::class)->middleware('throttle:signin')->name('signin');
