@extends('themes.layouts.main')

@section('title', 'Course' )
@section('content')

<div id="content">
    <div id="blog">
        
        @forelse($content as $data)
            <h1><center><a href="{{ url('blog/'. $data->id) }}">{{ $data->judul }}</a><center></h1>
            <h5><center>Konten ini di Tulis Oleh {{ $data->user->name }} terbitkan pada tanggal : {{$data->created_at}}| Kategori : <a href="{{ url('kategori/'. $data->categories->id) }}"> {{ $data->categories->nama }}<a></center></h5>
            <center><img src="{{ asset('storage/'.$data->gambar) }}" alt="{{ $data->id }}" style="width:350px"></center>
            <p>{{$data->deskripsi}}</p>
        @empty
            <p> Tidak ada info yang perlu di bagikan disini!<p>
        @endforelse

    </div>
</div>

@endsection