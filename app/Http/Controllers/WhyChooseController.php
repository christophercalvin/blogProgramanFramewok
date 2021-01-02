<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhyChooseUs;

class WhyChooseController extends Controller
{
    public function index()
    {
        $this->data['whychooseus'] = WhyChooseUs::orderBy('id', 'ASC')->paginate(100);
        
        return view('themes.whychoose', $this->data);
    }
}
