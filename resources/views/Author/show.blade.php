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
            <a href="{{route('author.store')}}" class="btn btn-success"><span data-feather="arrow-left"></span>To index</a>
                <div class="card">
                    <div class="card-header">Data Penulis</div>
                    <div class="card-body">

                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Nama Penulis</label>
                                <input type="text" name="name" value="{{$author->name}}" class="form-control @error('name') is-invalid @enderror" disabled>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
