@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
@include('layouts._flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    KepalaKeluarga
                    <a href="{{route('kepalakeluarga.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Penulis</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="kepalakeluarga">
                            <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Kode Desa</th>
                                <th>Nama KepalaKeluarga</th>
                                <th>Alamat</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no=1; @endphp
                            @foreach($kepalakeluarga as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->no}}</td>
                                <td>{{$data->kode_desa}}</td>
                                <td>{{$data->nama_kepala_keluarga}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>
                                    <form action="{{ route('kepalakeluarga.destroy', $data->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{(route('kepalakeluarga.edit', $data->id))}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{(route('kepalakeluarga.show', $data->id))}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset ('DataTables/datatables.min.css')}}">
@endsection

@section('js')
<script src="{{ asset ('DataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#kepalakeluarga').DataTable();
    });
</script>
@endsection
