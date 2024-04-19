@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Buat Postingan') }}</div>

                    <div class="card-body">
                        <form action="/updatepostingan/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        <input type="text" name="judul" value="{{ $post->judul }}"><br><br>
                        <input type="text" name="caption" value="{{ $post->caption }}"><br><br>
                        
                        <input type="file" name="gambar">
                        <p class="text-warning">jika tidak ingin mengganti gambar, tidak perlu upload lagi</p>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection