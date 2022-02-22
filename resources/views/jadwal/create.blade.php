@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Jadwal Dokter</h1>
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
                    <div class="card-body">
                        <form action="{{ route('jadwal.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama Dokter</label>
                                <input type="text" name="nama_dokter"
                                    class="form-control @error('nama_dokter') is-invalid @enderror">
                                @error('nama_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Waktu Mulai</label>
                                <input type="text" name="waktu_mulai"
                                    class="form-control @error('waktu_mulai') is-invalid @enderror">
                                @error('waktu_mulai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Waktu Berakhir</label>
                                <input type="text" name="waktu_akhir"
                                    class="form-control @error('waktu_akhir') is-invalid @enderror">
                                @error('waktu_akhir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
