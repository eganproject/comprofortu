<?php

namespace App\Http\Controllers;

use App\Models\ClientExperience;
use App\Models\HeroImages;
use App\Models\AboutUs;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index(){
        $hero = HeroImages::where('modul', 'index')->first();
        $clientExperience = ClientExperience::latest()->limit(8)->get();
        return view('user.index', compact('hero','clientExperience'));
    }
    public function about(){
        $hero = HeroImages::where('modul', 'about')->first();
        $about = AboutUs::first();
        return view('user.about', compact(['hero', 'about']));
    }
    public function service(){
        $hero = HeroImages::where('modul', 'service')->first();
        $services = Service::all();
        return view('user.service', compact(['hero', 'services']));
    }
}
