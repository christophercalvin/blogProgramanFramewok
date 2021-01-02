@extends('admin.layout')

@section('content')

@php
    $formTitle = !empty($category) ? 'Edit' : 'Data Baru'    
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>{{ $formTitle }} Kategori</h2>
                </div>
                <div class="card-body">
                    @include('admin.partials.flash', ['$errors' => $errors])
                    @if (!empty($category))
                        {!! Form::model($category, ['url' => ['admin/categories', $category->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data' ]) !!}
                        {!! Form::hidden('id') !!}
                    @else
                        {!! Form::open(['url' => 'admin/categories', 'method' => 'POST' ,'enctype' => 'multipart/form-data']) !!}
                    @endif
                        <div class="form-group">
                        {!! Form::label('gambar_kategori', 'Gambar') !!}
                        {!! Form::file('gambar_kategori', ['class' => 'form-control-file', 'placeholder' => 'product image']) !!}
                        
                        </div>
                        <div class="form-group">
                            {!! Form::label('nama', 'Nama') !!}
                            {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Kategori']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('deskripsi', 'Deskripsi') !!}
                            {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'placeholder' => 'Deskripsi Kategori']) !!}
                        </div>                        
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Simpan</button>
                            <a href="{{ url('admin/categories') }}" class="btn btn-secondary btn-default">Kembali</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection