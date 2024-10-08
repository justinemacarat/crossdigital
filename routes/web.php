<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;


Route::get('/', function () {
    return Inertia::render('Home');
});

Route::post('/contact-us', [ContactController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-message/store', [ContactMessageController::class, 'store'])->name('contact-message.store');