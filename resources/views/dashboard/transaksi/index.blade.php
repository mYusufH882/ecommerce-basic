@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Transaksi</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Invoice</th>
                                    <th>Nama Produk</th>
                                    <th>Harga & Qty</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    @can('isAdmin')
                                    <th>Aksi</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($transaksi as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->invoice}}</td>
                                    <td>
                                        <b>Rp.</b> {{number_format($item->harga_produk, '2', ',', '.')}} <br><br>
                                        <b>Qty</b> {{$item->qty_produk}}
                                    </td>
                                    <td>{{number_format($item->total_amount, 2, ',', '.')}}</td>
                                    <td>{{$item->status}}</td>

                                    @can('isAdmin')
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">
                                            <i class="mdi mdi-arrange-bring-forward me-1"></i>
                                            Edit
                                        </a>
                                        {{-- <form action="{{ route('transaksi.destroy', $item->id) }}" method="post"
                                            class="d-inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah anda ingin menghapus data {{$item->nama_produk}} ini?')">
                                                <i class="mdi mdi-archive"></i> Hapus
                                            </button>
                                        </form> --}}
                                    </td>
                                    @endcan
                                </tr>
                                @empty
                                <tr>
                                    @can('isAdmin')
                                    <td colspan="7">
                                        <p class="text-center">Maaf data belum tersedia</p>
                                    </td>
                                    @else
                                    <td colspan="6">
                                        <p class="text-center">Maaf data belum tersedia</p>
                                    </td>
                                    @endcan
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection