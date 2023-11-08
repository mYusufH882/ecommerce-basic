@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Produk</h4>
                    <a href="{{route('produk.create')}}" class="btn btn-primary mb-3 mt-2">
                        <i class="mdi mdi-account-plus me-1"></i>
                        Tambah Produk Baru
                    </a>

                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        <span class="text-bold">{{Session::get('success')}}</span>
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 15px;">No.</th>
                                    <th>Gambar Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga & Qty</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $item)
                                <tr>
                                    <td style="width: 15px;">{{$loop->iteration}}</td>
                                    <td>
                                        <img src="{{asset('gambar_produk/'.$item->gambar_produk)}}"
                                            alt="{{$item->nama_produk}}" class="w-50 h-50">
                                    </td>
                                    <td>{{$item->nama_produk}}</td>
                                    <td>
                                        <span class="badge bg-info">{{$item->category->nama_kategori}}</span>
                                    </td>
                                    <td>
                                        <b>Rp.</b> {{number_format($item->harga_produk, '2', ',', '.')}} <br><br>
                                        <b>Qty</b> {{$item->qty_produk}}
                                    </td>
                                    <td>
                                        <a href="{{route('produk.edit', $item->id)}}" class="btn btn-sm btn-warning">
                                            <i class="mdi mdi-arrange-bring-forward me-1"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('produk.destroy', $item->id) }}" method="post"
                                            class="d-inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah anda ingin menghapus data {{$item->nama_produk}} ini?')">
                                                <i class="mdi mdi-archive"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection