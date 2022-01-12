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
                    Daftar Pasien
                    <a href="{{route('pasien.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Penulis</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="pasien">
                            <thead>
                            <tr>
                                <th>No_Identitas</th>
                                <th>Nik</th>
                                <th>id_KepalaKeluarga</th>
                                <th>Nama_pasien</th>
                                <th>Jenis_kelamin</th>
                                <th>Tgl-lahir</th>
                                <th>No_telp</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no=1; @endphp
                            @foreach($pasien as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->no_identitas}}</td>
                                <td>{{$data->Nik}}</td>
                                <td>{{$data->id_KepalaKeluarga}}</td>
                                <td>{{$data->nama_pasien}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->tanggal_lahir}}</td>
                                <td>{{$data->no_telpon}}</td>
                                <td>
                                    <form action="{{ route('pasien.destroy', $data->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{(route('pasien.edit', $data->id))}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{(route('pasien.show', $data->id))}}" class="btn btn-outline-warning">Show</a>
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
