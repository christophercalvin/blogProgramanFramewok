<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class ViewBlogController extends Controller
{
    public function index()
    {
        $this->data['ViewController'] = Blog::orderBy('id', 'desc')->get();
        
        return view('themes.blog', $this->data);
    }

    public function show($id)
    {
        $pecah=Blog::where('id', $id)->get();

        if(!$pecah){
            return redirect('themes.blog');
        }

        $this->data['content']=$pecah;

        return view('themes.tampilkan', $this->data);
    }
}
