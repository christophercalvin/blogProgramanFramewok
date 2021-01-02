@extends('admin.layout')

@section('content')

@php
    $formTitle = !empty($WhyChooseUs) ? 'Edit' : 'Data Baru'    
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>{{ $formTitle }} Paragraph Why Choose Us</h2>
                </div>
                <div class="card-body">
                    @include('admin.partials.flash', ['$errors' => $errors])
                    @if (!empty($WhyChooseUs))
                        {!! Form::model($WhyChooseUs, ['url' => ['admin/WhyChooseUs', $WhyChooseUs->id], 'method' => 'PUT']) !!}
                        {!! Form::hidden('id') !!}
                    @else
                        {!! Form::open(['url' => 'admin/WhyChooseUs']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('deskripsi', 'Deskripsi') !!}
                            {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'placeholder' => 'Deskripsi Konten']) !!}
                        </div>                        
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Simpan</button>
                            <a href="{{ url('admin/WhyChooseUs') }}" class="btn btn-secondary btn-default">Kembali</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection