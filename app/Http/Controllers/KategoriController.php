<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
class KategoriController extends Controller
{
    public function index()
    {
        $this->data['Kategori'] = Category::orderBy('id', 'asc')->get();
        
        return view('themes.kategori', $this->data);
    }

    public function show($id)
    {
        $this->data['categories'] = Category::where('id', $id)->get();

        $this->data['include']=Blog::where('id_categories', $id)->get();
        
        return view('themes.kategoriShow', $this->data);
    }
}
