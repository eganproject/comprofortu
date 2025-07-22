<?php

namespace App\Http\Controllers;

use App\Models\HeroImages;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function about(){
        $hero = HeroImages::where('modul', 'about')->first();
        return view('user.about', compact('hero'));
    }
}
