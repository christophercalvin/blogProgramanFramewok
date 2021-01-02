<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $blog=Blog::latest()->paginate(1);

        $blogs=Blog::latest()->paginate(3);

        return view('themes.index', compact('blog','blogs'));
    }

}
