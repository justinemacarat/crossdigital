<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndustriesController extends Controller
{
    //
    public function ecommerceSolution()
    {
        return Inertia::render('EcommerceSolution');
    }
    public function contentMarketing()
    {
        return Inertia::render('ContentMarketing');
    }
    public function socialmediatMarketing()
    {
        return Inertia::render('SocialmediaMarketing');
    }
    public function seoServices()
    {
        return Inertia::render('SeoServices');
    }
}
