<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WhyChooseUsRequest;
use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;

use Str;
use Session;
use Auth;

class WhyChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['WhyChooseUs'] = WhyChooseUs::orderBy('id', 'ASC')->paginate(100);
        return view('admin.WhyChooseUs.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.WhyChooseUs.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WhyChooseUsRequest $request)
    {
        $params = $request->except('_token');
        $params['user_id'] = Auth::user()->id;

        if (WhyChooseUs::create($params)) {
            Session::flash('success', 'Berhasil Membuat Konten Laman About Us Baru');
        }
        return redirect('admin/WhyChooseUs');
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
        $WhyChooseUs = WhyChooseUs::findOrFail($id);

        $this->data['WhyChooseUs'] = $WhyChooseUs;

        return view('admin.WhyChooseUs.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WhyChooseUsRequest $request, $id)
    {
        $params = $request->except('_token');
        $params['user_id'] = Auth::user()->id;

        $WhyChooseUs = WhyChooseUs::findOrFail($id);
        if ($WhyChooseUs->update($params)) {
            Session::flash('success', 'Perubahan Berhasil Disimpan.');
        }

        return redirect('admin/WhyChooseUs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $WhyChooseUs = WhyChooseUs::findOrFail($id);

        if ($WhyChooseUs->delete()) {
            Session::flash('success', 'Paragraph Berhasil Dihapus');
        }

        return redirect('admin/WhyChooseUs');
    }
}
