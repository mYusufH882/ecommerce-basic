@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center my-4">Form Input Produk</h2>
                    <form class="forms-sample" action="{{route('produk.store')}}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="gambarProduk">Gambar Produk</label>
                            <input type="file" name="gambar_produk" id="gambarProduk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="namaProduk">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control @error('nama_produk')
                                is-invalid
                            @enderror" id="namaProduk" placeholder="Nama Produk">
                            @error('nama_produk')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsiProduk">Deskripsi Produk</label>
                            <textarea name="deskripsi_produk" class="form-control" id="deskripsiProduk"
                                placeholder="Deskripsi Produk" rows="50"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kategoriProduk">Kategori Produk</label>
                            <select name="id_category" id="kategoriProduk" class="form-control @error('id_category')
                                is-invalid
                            @enderror" aria-placeholder="Pilih Kategori">
                                <option value="0">Pilih Kategori</option>
                                @foreach ($kategori as $item)
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                @endforeach
                            </select>
                            @error('id_category')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hargaProduk">Harga Produk</label>
                            <input type="number" name="harga_produk" step="0.01" min="0" max="1000000" class="form-control @error('harga_produk')
                                is-invalid
                            @enderror" id="hargaProduk" placeholder="Harga Produk">
                            @error('harga_produk')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="qtyProduk">Qty Produk</label>
                            <input type="number" name="qty_produk" class="form-control @error('qty_produk')
                                is-invalid
                            @enderror" id="qtyProduk" placeholder="Quantity Produk">
                            @error('qty_produk')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button type="reset" class="btn btn-light">Resest</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection