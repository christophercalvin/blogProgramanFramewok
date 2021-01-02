@extends('themes.layouts.main')

@section('title', 'Course' )
@section('content')

<div id="content">
    <div id="blog">
        
        @forelse($Kategori as $data)
            <h1><center><a href="{{ url('kategori/'. $data->id) }}">{{ $data->nama}}</a></center></h1>
            <h4><center>Kategori ini di terbitkan pada tanggal : {{$data->created_at}}</center></h4>
            <p>{!! Str::words($data->deskripsi,100, '...')!!}</p>
        @empty
            <p> Tidak ada info yang perlu di bagikan disini!<p>
        @endforelse

    </div>
</div>

@endsection