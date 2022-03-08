@extends('adminlte::page')

@section('content_header')
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

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
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
                                <label for="">Nama Pasien</label>
                                <input type="text" name="nama_pasien"
                                    class="form-control @error('nama_pasien') is-invalid @enderror">
                                @error('nama_pasien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal Daftar</label>
                                <input type="date" name="tanggal_daftar"
                                    class="form-control @error('tanggal_daftar') is-invalid @enderror">
                                @error('tanggal_daftar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" name="no_telepon"
                                    class="form-control @error('no_telepon') is-invalid @enderror">
                                @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Dokter</label>
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
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control @error('jk') is-invalid @enderror">
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jadwal periksa</label>
                                <input type="text" name="jadwalperiksa"
                                    class="form-control @error('jadwalperiksa') is-invalid @enderror">
                                @error('jadwalperiksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Alamat pasien</label>
                                <input type="text" name="alamatpasien" class="form-control @error('alamatpasien') is-invalid @enderror">
                                @error('alamatpasien')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                             {{-- <div class="form-group">
                                 <label for="">Kamar</label>
                                 <input type="text" name="kamar" class="form-control @error('kamar') is-invalid @enderror">
                                 @error('kamar')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div> --}}
                             <div class="form-group">
                                 <label for="">Kamar</label>
                                 <select name="id_kamar" class="form-control @error('id_kamar') is-invalid @enderror">
                                     @foreach ($kamar as $data)
                                     <option value="{{ $data->id }}">{{ $data->nama_kamar }}</option>
                                     @endforeach
                                 </select>
                                 @error('id_kamar')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>


                           
                            <div class="form-group">
                                <label for="">Ruang</label>
                                <select name="id_ruang" class="form-control @error('id_ruang') is-invalid @enderror">
                                    @foreach ($ruang as $data)
                                        <option value="{{ $data->id }}">{{ $data->Ruangan }}</option>
                                    @endforeach
                                </select>
                                @error('id_ruang')
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
