<?php

namespace App\Http\Controllers;

use App\Models\HeroImages;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function about(){
        $hero = HeroImages::where('modul', 'about')->first();
        $about = AboutUs::first();
        return view('user.about', compact(['hero', 'about']));
    }
}
