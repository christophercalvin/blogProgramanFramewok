@extends('admin.layout')

@section('content')
<div class='content'>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class= "card-header card-header-border-botton">
                        <h1>Content Why Choose Us</h1>
                    </div>
                    <div class="card-body">
                        @include('admin.partials.flash')
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>Paragraph</th>
                                <th>Deskripsi</th>
                                <th>Pengubah Terakhir</th>
                                <th>Tanggal Dibuat</th>
                                <th>Perubahan Terakhir</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse($WhyChooseUs as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{!! Str::words($data->deskripsi,15, '...')!!}</td>
                                        <td> {{ ($data->user->name)}}</td>
                                        <td>{{ ($data->created_at) }} </td>
                                        <td>{{ ($data->updated_at) }} </td>
                                        <td>
                                        <a href="{{ url('whychoose') }}" class="btn btn-primary btn-sm">Baca</a>
                                        <a href="{{ url('admin/WhyChooseUs/'. $data->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                                            
                                            {!! Form::open(['url' => 'admin/WhyChooseUs/'. $data->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::submit('HAPUS', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7"><center>Isi Paragraph Kosong, Silahkan Buat Paragraph Baru Baru! </center></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text right">
                        <a href="{{ url('admin/WhyChooseUs/create') }}" class="btn btn-primary">Tambah Paragraph Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection