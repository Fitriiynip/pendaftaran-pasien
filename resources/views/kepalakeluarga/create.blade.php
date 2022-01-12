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
                <div class="card-header">KepalaKeluarga</div>
                <div class="card-body">
                    <form action="{{route('kepalakeluarga.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Nomor KK</label>
                            <input type="text" name="no" class="form-control @error('no') is-invalid @enderror">
                            @error('no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                             <div class="form-group">
                            <label for="">Masukan Kode Desa</label>
                            <input type="text" name="kode_desa" class="form-control @error('kode_desa') is-invalid @enderror">
                            @error('kode_desa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                             <div class="form-group">
                            <label for="">Masukan Nama KK</label>
                            <input type="text" name="nama_kepala_keluarga" class="form-control @error('nama_kepala_keluarga') is-invalid @enderror">
                            @error('nama_kepala_-keluarga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                             <div class="form-group">
                            <label for="">Masukan Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                            @error('alamat')
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
