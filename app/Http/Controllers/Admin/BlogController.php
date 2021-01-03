<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;

use Str;
use Session;
use Auth;
use App\Authorizable;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=Blog::latest()->get();

        return view('admin.Blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'nama')->get();

        return view('admin.Blog.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $params = $request->except('_token');

        $params['user_id'] = Auth::user()->id;

        $gambar=$request->file('gambar');
        $name=time();
        $fileName=$name.'.'.$gambar->getClientOriginalExtension();

        $folder='/uploads/Blog';
        $filePath=$gambar->storeAs($folder, $fileName, 'public');
        $params['gambar'] = $filePath;

        if (Blog::create($params)) {
            Session::flash('success', 'Berhasil Membuat Kategori Baru!');
        }
        return redirect('admin/Blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $params['user_id'] = Auth::user()->id;
        $categories=Category::select('id', 'nama')->get();
        $artikel=Blog::find($id);

        return view('admin/Blog.edit', compact('categories', 'artikel'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $params = $request->except('_token'); 
        $params['user_id'] = Auth::user()->id;
                
        if($request->has('gambar')){    
            $gambar=$request->file('gambar');
            $name=time();
            $fileName=$name.'.'.$gambar->getClientOriginalExtension();
    
            $folder='/uploads/Blog';
            $filePath=$gambar->storeAs($folder, $fileName, 'public');
            $params['gambar'] = $filePath;

            
            $blog = Blog::findOrFail($id);
            if ($blog->update($params)) {
                Session::flash('success', 'Berhasil Mengubah Data');
            }
            else{
                Session::flash('error', 'Gagal Mengubah Data');
            }
        }
        else{
            $blog = Blog::findOrFail($id);
            $blog->update([
                'judul'=>$request->judul,
                'deskripsi' => $request->deskripsi,
                'id_categories' => $request->id_categories,
                'user_id' => $params['user_id']= Auth::user()->id,
            ]);
            
        }

		return redirect('admin/Blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog  = Blog::findOrFail($id);

		if ($blog->delete()) {
			Session::flash('success', 'Konten Berhasil Dihapus Permanen');
		}

		return redirect('admin/Blog');
    }
}

