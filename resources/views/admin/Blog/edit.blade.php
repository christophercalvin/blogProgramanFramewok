@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-7">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2> Edit Blog</h2>
                </div>
                <div class="card-body">
                    @include('admin.partials.flash', ['$errors' => $errors])
                    <form action="{{ route('Blog.update',$artikel->id) }}" enctype="multipart/form-data" method="POST">
                     @csrf
                     @method("PUT")
                        <div class="form-group">
                            <label>Judul Artikel</label>
                            <input type="text" class="form-control" name="judul" placeholder="tulis judul disini!" value="{{$artikel->judul}}">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <div class="form-group">
                            <label>Kategori Artikel</label>
                            <select name="id_categories" class="form-control" value="{{$artikel->id_categories}}">
                         @foreach ($categories as $item)
                         <option value={{$item->id}}>{{$item->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                         <label>Isi Artikel</label>
                        <textarea name="deskripsi" class="deskripsi" placeholder="Tulis Artikelmu Disini!" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$artikel->deskripsi}}</textarea>
                     </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{Route ('Blog.index')}}" class="btn btn-danger">Kembali</a>
                    </div>
                 </form>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection