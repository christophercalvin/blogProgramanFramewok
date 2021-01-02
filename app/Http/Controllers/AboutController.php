<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\AboutUs;

use Str;

class AboutController extends Controller
{
    public function index()
    {
        $this->data['about_us'] = AboutUs::orderBy('id', 'ASC')->paginate(100);
        
        return view('themes.about', $this->data);
    }
}

