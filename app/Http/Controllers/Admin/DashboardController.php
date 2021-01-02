<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;

class DashboardController extends Controller
{
    function index()
    {
        $blog=Blog::latest()->get();

        return view('admin.dashboard.index', compact('blog'));
    }
}
