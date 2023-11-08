@extends('layouts.app')

@section('content')
@include('components.header')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-1">
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Landing Page</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Belanja</li>
                </ol>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center">Detail Belanja</h3>
                <div class="card">
                    <img class="card-img-top" style="height: 325px;"
                        src="{{asset('gambar_produk/'.$belanja->gambar_produk)}}" alt="..." />
                    <div class="card-body">
                        <div class="text-center">
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <span class="badge bg-info mb-3">{{$belanja->category->nama_kategori}}</span>
                            <h5 class="fw-bolder">{{$belanja->nama_produk}}</h5>
                            <p>
                                {{$belanja->deskripsi_produk}}
                            </p>

                            <form action="{{route('belanja-sekarang')}}" method="POST">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-sm-7">
                                        <input type="hidden" name="id_produk" value="{{$belanja->id}}">
                                        <input type="text" name="harga" class="form-control" placeholder="Harga Produk"
                                            aria-label="Harga"
                                            value="Rp. {{number_format($belanja->harga_produk, 2, ',', '.')}}" disabled>
                                    </div>
                                    <div class="col-sm">
                                        <input type="number" name="qty" class="form-control @error('qty')
                                            is-invalid
                                        @enderror" placeholder="Quantity" aria-label="Quantity">
                                        @error('qty')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm">
                                        @csrf
                                        <button type="submit" class="btn btn-md btn-success">
                                            Pembayaran
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.footer')
@endsection