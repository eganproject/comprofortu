<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Logic to display the list of services
        return view('admin.web_preferences.services.index');
    }
}
