<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;

use Str;
use Session;

class Categories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['categories'] = Category::orderBy('id', 'ASC')->paginate(100);
        return view('admin.categories.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('nama', 'asc')->get();

        $this->data['categories'] = $categories->toArray();
        $this->data['category'] = null;
        return view('admin.categories.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    
     public function store(CategoryRequest $request)
    {      
        
        $params = $request->except('_token');
        
        $gambar_kategori=$request->file('gambar_kategori');
        $name=time();
        $fileName=$name.'.'.$gambar_kategori->getClientOriginalExtension();

        $folder='/uploads/Blog';
        $filePath=$gambar_kategori->storeAs($folder, $fileName, 'public');

        $params['slug'] = Str::slug($params['nama']);
        $params['parent_id'] = 0;
        $params['gambar_kategori'] = $filePath;

        if (Category::create($params)) {
            Session::flash('success', 'Berhasil Membuat Kategori Baru!');
        }
        return redirect('admin/categories');
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
        $category = Category::findOrFail($id);
        $categories = Category::where('id', '!=', $id)->orderBy('nama', 'asc')->get();

        $this->data['categories'] = $categories->toArray();
        $this->data['category'] = $category;
        return view('admin.categories.form', $this->data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $params = $request->except('_token');
        
        if($request->has('gambar_kategori')){
            $gambar_kategori=$request->file('gambar_kategori');
            $name=time();
            $fileName=$name.'.'.$gambar_kategori->getClientOriginalExtension();
    
            $folder='/uploads/Blog';
            $filePath=$gambar_kategori->storeAs($folder, $fileName, 'public');
    
            $params['slug'] = Str::slug($params['nama']);
            $params['parent_id'] = 0;
            $params['gambar_kategori'] = $filePath;
            
            $category = Category::findOrFail($id);
            if ($category->update($params)) {
                Session::flash('success', 'Berhasil Membuat Kategori Baru!');
            }
        }
        else{
            $category = Category::findOrFail($id);
            $category->update([
                'nama'=>$request->nama,
                'deskripsi' => $request->deskripsi,
            ]);

            
        }


        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category  = Category::findOrFail($id);

        if ($category->delete()) {
            Session::flash('success', 'Kategori Berhasil Dihapus');
        }

        return redirect('admin/categories');
    }
}

