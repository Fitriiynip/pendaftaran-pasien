@extends('adminlte::page')
@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Pendaftaran</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
@include('layouts._flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pendaftaran
                    <a href="{{ route('pendaftaran.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                        Pendaftaran</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Pasien</th>
                                    <th>Tanggal daftar</th>
                                    <th>Nama Dokter</th>
                                    <th>No Telepon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Pemriksa</th>
                                    <th>Alamat pasien</th>
                                    <th>Kamar</th>
                                    <th>Ruang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($pendaftaran as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_pasien }}</td>
                                    <td>{{ $data->tanggal_daftar }}</td>
                                    <td>{{ $data->jadwal->nama_dokter }}</td>
                                    <td>{{ $data->no_telepon }}</td>
                                    <td>{{ $data->jk }}</td>
                                    <td>{{ $data->jadwalperiksa }}</td>
                                    <td>{{ $data->alamatpasien }}</td>
                                     <td>{{ $data->kamar }}</td>
                                    <td>{{ $data->Ruang->Ruangan }}</td>
                                   

                                    <td>
                                        <form action="{{ route('pendaftaran.destroy', $data->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ route('pendaftaran.edit', $data->id) }}" class="btn btn-outline-info">Edit</a>
                                            <a href="{{ route('pendaftaran.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapusnya')">Delete</button>
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
<link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
<script src="{{ asset('Datatables/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

</script>
@endsection
