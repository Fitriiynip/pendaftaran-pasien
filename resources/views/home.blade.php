@extends('adminlte::page')

@section('content_header')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @role('admin')
                            <p>Halaman Admin</p>
                        @endrole

                        @role('member')
                            <p>Halaman Member</p>
                        @endrole

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
