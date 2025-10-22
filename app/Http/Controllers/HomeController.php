<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::active()->ordered()->get();
        $featuredServices = Service::active()->featured()->ordered()->take(3)->get();
        $teamMembers = TeamMember::active()->ordered()->get();
        $testimonials = Testimonial::active()->ordered()->take(6)->get();

        return view('home', compact('services', 'featuredServices', 'teamMembers', 'testimonials'));
    }
}
