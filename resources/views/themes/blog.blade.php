@extends('themes.layouts.main')

@section('title', 'Course' )
@section('content')

<div id="content">
    <div id="blog">
        
        @forelse($ViewController as $data)
            <h1><center><a href="{{ url('blog/'. $data->id) }}">{{ $data->judul }}</a><center></h1>
            <h5><center>Konten ini di Tulis Oleh {{ $data->user->name }}, di terbitkan pada tanggal : {{$data->created_at}} | Kategori : <a href="{{ url('kategori/'. $data->categories->id) }}"> {{ $data->categories->nama }}<a></center></h5>
            <p>{!! Str::words($data->deskripsi,100, '...')!!}</p>
        @empty
            <p> Tidak ada info yang perlu di bagikan disini!<p>
        @endforelse

    </div>
</div>

@endsection