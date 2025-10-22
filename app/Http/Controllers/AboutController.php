<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the About Us page.
     */
    public function aboutUs()
    {
        return view('about.about-us');
    }

    /**
     * Display the Careers page.
     */
    public function careers()
    {
        return view('about.careers');
    }
}