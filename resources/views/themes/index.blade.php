@extends('themes.layouts.main')

@section('title', 'Course' )
@section('content')
<div id="content">
    <div id="section">
        <div>
        @forelse ($blog as $data)
            @php
                $image = !empty($data->gambar) ? asset('storage/'.$data->gambar) : asset('images/little-girl-hugging-the-globe.jpg')
            @endphp
            <h1>{{ $data->judul }}</h1>
            <p>{!! Str::words($data->deskripsi,30, '...')!!}</p>
            <span>
                <a class="first" href="{{ url('blog/'. $data->id) }}">Selengkapnya</a>
            </span>
        </div>
        <div id="figure">
            <a href="index.html"></a>
            <img src="{{ asset('storage/'.$data->gambar) }}" alt="{{ $data->id }}" width="607px" height="305px">
        @empty
		    Tidak ada post terakhir!
        @endforelse
        </div>
        <span class="background"></span>
    </div>
    <div id="featured">
        <ul>
        @forelse ($blogs as $data)
            @php
                $image = !empty($data->gambar) ? asset('storage/'.$data->gambar) : asset('images/little-girl-hugging-the-globe.jpg')
            @endphp
            <li class="first">
                 <img src="{{ asset('storage/'.$data->gambar) }}" alt="{{ $data->id }}" width="275px" height="165px">
                <span></span>
                <p>{!! Str::words($data->deskripsi,15, '...')!!}</p>
                <a class="link" href="{{ url('blog/'. $data->id) }}">Lihat</a>
            </li>
            @empty
		        Tidak ada post!
            @endforelse
        </ul>
    </div>
</div>
@endsection

