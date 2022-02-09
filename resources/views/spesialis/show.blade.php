@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Spesialis</div>
                    <div class="card-body">
                        <form action="{{ route('spesialis.update', $spesialis->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Nama spesialis</label>
                                <input type="text" name="nama_spesialis" value="{{ $spesialis->nama_spesialis }}"
                                    class="form-control @error('nama_spesialis') is-invalid @enderror" disabled>
                                @error('nama_spesialis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <a href="{{ route('spesialis.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
