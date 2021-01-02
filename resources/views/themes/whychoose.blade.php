@extends('themes.layouts.main')

@section('title', 'Course' )
@section('content')

<div id="content">
    <div>
        <div>
            <a href="index.html"><img src="images/map-in-grass2.jpg" alt="Image" /></a>
            <span></span>
        </div>
        <h2><span>Mengapa</span> Memilih Kami?</h2>
        @forelse($whychooseus as $data)
            <p>{{ $data->deskripsi }}</p>
        @empty
            <p> Tidak ada info yang perlu di bagikan disini!<p>
        @endforelse
    </div>
</div>

@endsection

