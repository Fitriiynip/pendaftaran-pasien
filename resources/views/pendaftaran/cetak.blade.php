@extends('adminlte::page')

@section('title', 'Pendaftaran Pasien | Home')

@section('content_header')

<h4>Laporan</h4>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Laporan Pendaftaran Pasien</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Tanggal Awal</label>
                        <input type="date" name="tglawal" id="tglawal" class="form-control @error('tglawal') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Akhir</label>
                        <input type="date" name="tglakhir" id="tglakhir" class="form-control @error('tglakhir') is-invalid @enderror">
                    </div>
                    <div class="input-group mb-3">
                        <a href="" onclick="this.href='/admin/cetak-laporan-pertanggal/'+ document.getElementById('tglawal').value +
                                '/' + document.getElementById('tglakhir').value" class="btn btn-primary col-md-12" target="_blank">
                            Cetak Laporan <i class="fas fa-print"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
