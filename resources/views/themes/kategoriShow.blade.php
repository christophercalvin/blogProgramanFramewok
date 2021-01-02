@extends('themes.layouts.main')

@section('title', 'Course' )
@section('content')

<div id="content">
    <div id="blog">
        
        @forelse($categories as $data)
            <h1><center>{{ $data->nama}}</center></a></h1>
            <h4><center>Kategori ini di terbitkan pada tanggal : {{$data->created_at}}</center></h4>
            <center><img src="{{ asset('storage/'.$data->gambar_kategori) }}" alt="{{ $data->id }}" style="width:350px"></center>
            <h4> Deskripsi Kategori </h4>
            <p>{{$data->deskripsi}}</p>
        @empty
            <p> Tidak ada info yang perlu di bagikan disini!<p>
        @endforelse

        <h1>__________________________________________________________________________________________________________</h1>
        <h4> Related Blog </h4>

        @forelse($include as $data)
            <h1><center><a href="{{ url('blog/'. $data->id) }}">{{ $data->judul }}</a></center></h1>
            <center><img src="{{ asset('storage/'.$data->gambar) }}" alt="{{ $data->id }}" width="150px"></center>
            <p>{!! Str::words($data->deskripsi,100, '...')!!}</p>
        @empty
            <p> Tidak ada blog dari kategori ini!<p>
        @endforelse

        

    </div>
</div>

@endsection

