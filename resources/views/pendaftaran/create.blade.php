@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tambah Pendaftaran</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detail Pendaftaran</div>
                    <div class="card-body">
                        <form action="{{ route('pendaftaran.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama Pasien</label>
                                <input type="text" name="nama_pasien"
                                    class="form-control @error('nama_pasien') is-invalid @enderror">
                                @error('nama_pasien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="">Masukan Tanggal Daftar</label>
                                <input type="date" name="tanggal_daftar"
                                    class="form-control @error('tanggal_daftar') is-invalid @enderror">
                                @error('tanggal_daftar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan No Telepon</label>
                                <input type="text" name="no_telepon"
                                    class="form-control @error('no_telepon') is-invalid @enderror">
                                @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Dokter</label>
                                <select name="id_dokter" class="form-control @error('id_dokter') is-invalid @enderror">
                                    @foreach ($jadwal as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_dokter }}</option>
                                    @endforeach
                                </select>
                                @error('id_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control @error('jk') is-invalid @enderror">
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Jadwal periksa</label>
                                <input type="text" name="jadwal_periksa"
                                    class="form-control @error('jadwal_periksa') is-invalid @enderror">
                                @error('jadwal_periksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan No Ruang</label>
                                <select name="id_ruang" class="form-control @error('id_ruang') is-invalid @enderror">
                                    @foreach ($ruang as $data)
                                        <option value="{{ $data->id }}">{{ $data->keterangan }}</option>
                                    @endforeach
                                </select>
                                @error('id_ruang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">cara Bayar</label>
                                <input type="text" name="cara_bayar"
                                    class="form-control @error('cara_bayar') is-invalid @enderror">
                                @error('cara_bayar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-warning">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
