@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center my-4">Form Edit Produk</h2>
                    <form class="forms-sample" action="{{route('produk.update', $produk->id)}}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="gambar">Gambar Sebelumnya</label> <br>
                            <img src="{{asset('gambar_produk/'.$produk->gambar_produk)}}" alt="{{$produk->nama_produk}}"
                                class="w-25 my-3">
                        </div>
                        <div class="form-group">
                            <label for="gambarProduk">Gambar Produk</label>
                            <input type="file" name="gambar_produk" id="gambarProduk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="namaProduk">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control @error('nama_produk')
                                is-invalid
                            @enderror" id="namaProduk" placeholder="Nama Produk" value="{{$produk->nama_produk}}">
                            @error('nama_produk')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsiProduk">Deskripsi Produk</label>
                            <textarea name="deskripsi_produk" class="form-control" id="deskripsiProduk"
                                placeholder="Deskripsi Produk" rows="50">{{$produk->deskripsi_produk}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="kategoriProduk">Kategori Produk</label>
                            <select name="id_category" id="kategoriProduk" class="form-control"
                                aria-placeholder="Pilih Kategori">
                                <option value="0">Pilih Kategori</option>
                                @foreach ($kategori as $item)
                                <option value="{{$item->id}}" {{$item->id == $produk->id_category ? 'selected' :
                                    ''}}>{{$item->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hargaProduk">Harga Produk</label>
                            <input type="text" name="harga_produk" class="form-control" id="hargaProduk"
                                placeholder="Harga Produk" value="{{$produk->harga_produk}}">
                            @error('harga_produk')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="qtyProduk">Qty Produk</label>
                            <input type="text" name="qty_produk" class="form-control @error('qty_produk')
                                is-invalid
                            @enderror" id="qtyProduk" placeholder="Quantity Produk" value="{{$produk->qty_produk}}">
                            @error('qty_produk')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-warning me-2">Edit</button>
                        <a href="{{route('produk.index')}}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection