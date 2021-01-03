@extends('admin.layout')

@section('content')

<div class='content'>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class= "card-header card-header-border-botton">
                        <h1>Halaman Konten Blog</h1>
                    </div>
                    <div class="card-body">
                        @include('admin.partials.flash')
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>ID</th>
                                <th>Gambar</th>
                                <th>Judul Blog</th>
                                <th>Deskripsi</th>
                                <th>Category</th>
                                <th>Penulis</th>
                                <th>Tanggal Dibuat</th>
                                <th>Perubahan Terakhir</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse($blog as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>
                                            <div class="tab-pane" role="tabpanel">
						                    <img src="{{ asset('storage/'.$data->gambar) }}" alt="{{ $data->id }}" style="width:100px">
                                        </td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{!! Str::words($data->deskripsi,15, '...')!!}</td>
                                        <td>{{ $data->categories->nama}}</td>
                                        <td>{{ $data->user->name}}</td>
                                        <td>{{ ($data->created_at) }} </td>
                                        <td>{{ ($data->updated_at) }} </td>
                                        <td>
                                        <a href="{{ url('blog/'. $data->id) }}" class="btn btn-primary btn-sm">Baca</a>
                                        <a href="{{ url('admin/Blog/'. $data->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                                            
                                            {!! Form::open(['url' => 'admin/Blog/'. $data->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::submit('HAPUS', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9"><center>Laman Konten Kosong, Silahkan Tambah Konten Baru! </center></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text right">
                        <a href="{{ url('admin/Blog/create') }}" class="btn btn-primary">Tambah Konten Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
