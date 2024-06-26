<?php

use App\Http\Middleware;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => [Middleware\RedirectIfAuthenticated::class],
], static function () {
    Route::view('/', 'signin')->name('signin');
    Route::post('/', Controllers\SignIn::class)->middleware('throttle:signin');
});

Route::group([
    'middleware' => [
        Middleware\RedirectIfNotAuthenticated::class,
        Middleware\SentryUserContext::class,
    ],
], static function () {
    Route::view('invite', 'invite')->name('invite');

    Route::get('invite/{person}/rsvp', Controllers\RSVP\ShowForm::class)->name('rsvp');
    Route::post('invite/{person}/rsvp', Controllers\RSVP\SubmitForm::class);

    Route::get('signout', Controllers\SignOut::class)->name('signout');
});
