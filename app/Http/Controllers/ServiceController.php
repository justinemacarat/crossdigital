<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceController extends Controller
{
    //
    public function webDevelopment()
    {
        return Inertia::render('WebDevelopment');
    }
    public function appDevelopment()
    {
        return Inertia::render('AppDevelopment');
    }
    public function digitalMarketing()
    {
        return Inertia::render('DigitalMarketing');
    }
    public function brandingDesign()
    {
        return Inertia::render('BrandingDesign', []);
    }
    public function servicePage()
    {
        return Inertia::render('Services', []);
    }
}
