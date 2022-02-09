@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Jadwal Dokter</div>
                    <div class="card-body">
                        <form action="{{ route('jadwal.update', $jadwal->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Nama Dokter</label>
                                <input type="text" name="nama_dokter" value="{{ $jadwal->nama_dokter }}"
                                    class="form-control @error('nama_dokter') is-invalid @enderror" disabled>
                                @error('nama_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for=""> Waktu Mulai </label>
                                <input type="text" name="waktu_mulai" value="{{ $jadwal->waktu_mulai }}"
                                    class="form-control @error('waktu_mulai') is-invalid @enderror" disabled>
                                @error('waktu_mulai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Waktu Akhir</label>
                                <input type="text" name="waktu_akhir" value="{{ $jadwal->waktu_akhir }}"
                                    class="form-control @error('waktu_akhir') is-invalid @enderror" disabled>
                                @error('waktu_akhir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <a href="{{ route('jadwal.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
