<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\IndustriesController;


Route::get('/', function () {
    return Inertia::render('Home');
});
//Services route
Route::get('/services/web-development', [ServiceController::class, 'webDevelopment'])->name('web-development');
Route::get('/services/app-development', [ServiceController::class, 'appDevelopment'])->name('app-development');
Route::get('/services/digital-marketing', [ServiceController::class, 'digitalMarketing'])->name('digital-marketing');
Route::get('/services/branding-design', [ServiceController::class, 'brandingDesign'])->name('branding-design');
//Industries route
Route::get('/industries/ecommerce-solution', [IndustriesController::class, 'ecommerceSolution'])->name('ecommerce-solution');
Route::get('/industries/content-marketing', [IndustriesController::class, 'contentMarketing'])->name('content-marketing');
Route::get('/industries/social-media-marketing', [IndustriesController::class, 'socialmediatMarketing'])->name('social-media-marketing');
Route::get('/industries/seo-services', [IndustriesController::class, 'seoServices'])->name('seo-services');
//Contact route
Route::post('/contact-us', [ContactController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-message/store', [ContactMessageController::class, 'store'])->name('contact-message.store');