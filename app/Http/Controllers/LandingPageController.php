<?php

namespace App\Http\Controllers;

use App\Models\HeroImages;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index(){
        $hero = HeroImages::where('modul', 'index')->first();
        return view('user.index', compact('hero'));
    }
    public function about(){
        $hero = HeroImages::where('modul', 'about')->first();
        $about = AboutUs::first();
        return view('user.about', compact(['hero', 'about']));
    }
}
