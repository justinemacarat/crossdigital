<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ServiceController;


Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/services/web-development', [ServiceController::class, 'webDevelopment'])->name('web-development');
Route::get('/services/app-development', [ServiceController::class, 'appDevelopment'])->name('app-development');
Route::get('/services/digital-marketing', [ServiceController::class, 'digitalMarketing'])->name('digital-marketing');
Route::get('/services/branding-design', [ServiceController::class, 'brandingDesign'])->name('branding-design');
Route::post('/contact-us', [ContactController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-message/store', [ContactMessageController::class, 'store'])->name('contact-message.store');