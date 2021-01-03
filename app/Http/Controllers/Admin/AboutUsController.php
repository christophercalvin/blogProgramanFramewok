<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AboutUsRequest;
use App\Http\Controllers\Controller;
use App\Models\AboutUs;

use Str;
use Session;
use Auth;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['AboutUs'] = AboutUs::orderBy('id', 'ASC')->paginate(100);
        return view('admin.AboutUs.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AboutUs.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutUsRequest $request)
    {
        $params = $request->except('_token');
        $params['user_id'] = Auth::user()->id;

        if (AboutUs::create($params)) {
            Session::flash('success', 'Berhasil Membuat Konten Laman About Us Baru');
        }
        return redirect('admin/AboutUs');
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
        $AboutUs = AboutUs::findOrFail($id);

        $this->data['AboutUs'] = $AboutUs;

        return view('admin.AboutUs.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUsRequest $request, $id)
    {
        $params = $request->except('_token');
        $params['user_id'] = Auth::user()->id;

        $AboutUs = AboutUs::findOrFail($id);
        if ($AboutUs->update($params)) {
            Session::flash('success', 'Perubahan Berhasil Disimpan.');
        }

        return redirect('admin/AboutUs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $AboutUs  = AboutUs::findOrFail($id);

        if ($AboutUs->delete()) {
            Session::flash('success', 'Paragraph Berhasil Dihapus');
        }

        return redirect('admin/AboutUs');
    }
}
