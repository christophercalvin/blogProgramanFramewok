@extends('admin.layout')

@section('content')

@php
    $formTitle = !empty($AboutUs) ? 'Edit' : 'Data Baru'    
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>{{ $formTitle }} Paragraph About Us</h2>
                </div>
                <div class="card-body">
                    @include('admin.partials.flash', ['$errors' => $errors])
                    @if (!empty($AboutUs))
                        {!! Form::model($AboutUs, ['url' => ['admin/AboutUs', $AboutUs->id], 'method' => 'PUT']) !!}
                        {!! Form::hidden('id') !!}
                    @else
                        {!! Form::open(['url' => 'admin/AboutUs']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('judul', 'Judul') !!}
                            {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Judul Konten']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('deskripsi', 'Deskripsi') !!}
                            {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'placeholder' => 'Deskripsi Konten']) !!}
                        </div>                        
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Simpan</button>
                            <a href="{{ url('admin/AboutUs') }}" class="btn btn-secondary btn-default">Kembali</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection