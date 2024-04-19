@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Lihat Postingan') }}</div>

                    <div class="card-body">
                        @foreach ($posts as $post)
                        <div>
                            <h3><b>{{ $post->judul }}</b></h3>
                            <p>{{ $post->caption }}</p>
                            <img src="{{ url($post->gambar) }}">
                            <br>
                            <br>
                            <a href="/formedit/{{ $post->id }}" class="btn btn-primary">Edit</a>
                            <a href="/hapuspostingan/{{ $post->id }}" class="btn btn-danger">Hapus</a>
                            <br>
                            <br>
                            <br>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection