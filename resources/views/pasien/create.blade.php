@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@stop

@section('content')
@include('layouts._flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DaftarPasien</div>
                <div class="card-body">
                    <form action="{{route('pasien.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan No_Identitas</label>
                            <input type="number" name="no_identitas" class="form-control @error('no_identitas') is-invalid @enderror">
                            @error('no_identitas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                             <div class="form-group">
                            <label for="">Masukan Nik</label>
                            <input type="number" name="Nik" class="form-control @error('Nik') is-invalid @enderror">
                            @error('Nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                             <div class="form-group">
                            <label for="">Masukan Id_kepala_keluarga</label>
                            <input type="text" name="id_KepalaKeluarga" class="form-control @error('id_KepalaKeluarga') is-invalid @enderror">
                            @error('id_KepalaKeluarga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                             <div class="form-group">
                            <label for="">Masukan Nama_pasien</label>
                            <input type="text" name="nama_pasien" class="form-control @error('nama_pasien') is-invalid @enderror">
                            @error('nama_pasien')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            <div class="form-group">
                            <label for="">Masukan Jenis_kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                            @error('jenis_kelamin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            <div class="form-group">
                            <label for="">Masukan Tanggal_lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                            @error('tanggal_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            <div class="form-group">
                            <label for="">Masukan no_telpon</label>
                            <input type="number" name="no_telpon" class="form-control @error('no_telpon') is-invalid @enderror">
                            @error('no_telpon')
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
@stop

@section('css')


@stop

@section('js')

@stop
