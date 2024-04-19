@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Selamat Datang <b>{{ Auth::user()->name }}</b></p>

                    <p>Jumlah Postingan Anda <b>{{ Auth::user()->postingan()->count() }}</b></p>
                    <a href="/formpostingan" class="btn btn-primary">Buat Postingan</a>
                    <a href="/lihatpostingan" class="btn btn-secondary">Lihat Postingan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
