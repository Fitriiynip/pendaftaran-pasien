@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Kamar</h1>
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
                    <form action="{{ route('kamar.update',$kamar->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Masukan Nama kamar</label>
                            <input type="integer" name="nama_kamar" value="{{$kamar->nama_kamar}}" class="form-control @error('nama_kamar') is-invalid @enderror">
                            @error('nama_kamar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama ruangan</label>
                            <select name="id_ruang" class="form-control @error('id_ruang') is-invalid @enderror">
                                @foreach($ruang as $data)
                                <option value="{{ $data->id }}" {{$data->id == $kamar->id_ruang ? 'selected="selected"' : ''}}>{{ $data->Ruangan }}</option>
                                @endforeach
                            </select>
                            @error('id_ruang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-warning">Edit</button>
                            </div>

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
