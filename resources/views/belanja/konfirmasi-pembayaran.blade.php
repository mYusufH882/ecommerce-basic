@extends('layouts.app')

@section('content')
@include('components.header')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-1">
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Landing Page</a></li>
                    <li class="breadcrumb-item">Detail Belanja</li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">Konfirmasi Pembayaran</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center">Konfirmasi Pembayaran</h3>
                <div class="card">
                    <img class="card-img-top" style="height: 325px;"
                        src="{{asset('gambar_produk/'.$trans->product->gambar_produk)}}" alt="..." />
                    <div class="card-body">
                        <div class="text-center">
                            <span class="badge bg-info mb-3">{{$trans->product->category->nama_kategori}}</span>
                            <h5 class="fw-bolder">{{$trans->product->nama_produk}}</h5>

                            <p>
                                {{$trans->product->deskripsi_produk}}
                            </p>

                            <p>Total Bayar : Rp. {{$amount}} x
                                {{$qty}} = Rp. <b>{{$total}}</b></p>

                            @if ($trans->status == "Pending")
                            <div class="alert alert-warning mb-3">
                                <span>Status pesanan anda masih di Pending, segera konfirmasi Pembayaran !!!</span>
                            </div>

                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                <span>{{Session::get('success')}}</span>
                            </div>
                            @elseif(Session::has('failed'))
                            <div class="alert alert-danger">
                                <span>{{Session::get('failed')}}</span>
                            </div>
                            @endif

                            <form action="{{route('konfirmasi')}}" method="POST">
                                @csrf

                                <div class="row g-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Total Pembayaran</span>
                                        <input type="hidden" name="id_produk" value="{{$trans->id_product}}">
                                        <input type="text" name="total" value="Rp. {{$total}}"
                                            aria-label="Total Pembayaran" class="form-control" disabled>
                                        <input type="text" name="bayar" aria-label="Bayar" class="form-control @error('bayar')
                                            is-invalid
                                        @enderror">
                                        @error('bayar')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm">
                                        @csrf
                                        <button type="submit" class="btn btn-success">
                                            Konfirmasi Pembayaran
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @else
                            <div class="alert alert-success">
                                <span>Selamat Pesanan anda berhasil Diproses !!!</span>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.footer')
@endsection