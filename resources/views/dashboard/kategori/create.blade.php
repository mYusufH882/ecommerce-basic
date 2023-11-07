@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center my-4">Form Input Kategori</h2>
                    <form class="forms-sample" action="{{route('kategori.store')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="namaKategori">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control @error('nama_kategori')
                                is-invalid
                            @enderror" id="namaKategori" placeholder="Nama Kategori">
                            @error('nama_kategori')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{route('kategori.index')}}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection