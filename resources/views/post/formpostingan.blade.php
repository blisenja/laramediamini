@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Buat Postingan') }}</div>

                    <div class="card-body">
                        <form action="/buatpostingan" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="text" name="judul"><br><br>
                        <input type="text" name="caption"><br><br>
                        <input type="file" name="gambar"><br><br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection