@extends('admin.layout')

@section('content')

<div class='content'>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class= "card-header card-header-border-botton">
                        <h1>Log Activity</h1>
                    </div>
                    <div class="card-body">
                        @include('admin.partials.flash')
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>Activitas</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse($blog as $data)
                                    <tr>
                                        <td> Pada Tanggal {{ $data->created_at }}, {{ $data->user->name }} menerbitkan pos baru berjudul "{{ $data->judul }}"</td>
                                        <td>
                                        <a href="{{ url('blog/'. $data->id) }}" class="btn btn-primary btn-sm">Baca</a>
                                            
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6"><center>Tidak Ada Log Activity Sekarang! </center></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection