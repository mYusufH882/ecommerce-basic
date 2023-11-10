@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                </div>
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="statistics-details d-flex align-items-center justify-content-between">
                                    @can('isAdmin')
                                    <div>
                                        <p class="statistics-title">Produk</p>
                                        <h3 class="rate-percentage">{{$data['jproduk']}}</h3>
                                    </div>
                                    <div>
                                        <p class="statistics-title">Kategori</p>
                                        <h3 class="rate-percentage">{{$data['jkategori']}}</h3>
                                    </div>
                                    @endcan
                                    <div>
                                        <p class="statistics-title">Transaksi</p>
                                        <h3 class="rate-percentage">{{$data['jtransaksi']}}</h3>
                                    </div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash">Daftar Transaksi
                                                        </h4>
                                                        <p class="card-subtitle card-subtitle-dash">Kamu
                                                            memiliki {{$data['jtransaksi']}} daftar transaksi baru.</p>
                                                    </div>
                                                    <div>
                                                        <a href="/transaksi"
                                                            class="btn btn-primary btn-lg text-white mb-0 me-0"><i
                                                                class="mdi mdi-eye"></i>Lihat
                                                            Transaksi</a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive  mt-1">
                                                    <table class="table select-table">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Nama Pelanggan & Invoice</th>
                                                                <th>Nama Produk, Harga & Qty</th>
                                                                <th></th>
                                                                <th>Total Harga x Qty</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {{-- <tr>
                                                                <td>
                                                                    <div class="d-flex ">
                                                                        <img src="{{asset('assets/star-admin2/template/images/faces/face1.jpg')}}"
                                                                            alt="">
                                                                        <div>
                                                                            <h6>Brandon Washington</h6>
                                                                            <p>Head admin</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>Company name 1</h6>
                                                                    <p>company type</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">79%</p>
                                                                            <p>85/162</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success"
                                                                                role="progressbar" style="width: 85%"
                                                                                aria-valuenow="25" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td></td>
                                                                <td>
                                                                    <div class="badge badge-opacity-warning">In progress
                                                                    </div>
                                                                </td>
                                                            </tr> --}}
                                                            @forelse ($transaksi as $item)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{ucfirst($item->user->name)}}<br>{{$item->invoice}}
                                                                </td>
                                                                <td>
                                                                    <img class="mb-2"
                                                                        src="{{asset('gambar_produk/'.$item->product->gambar_produk)}}"
                                                                        alt="{{$item->product->nama_produk}}"> <br>
                                                                    {{$item->product->nama_produk}} <br>
                                                                    <b>
                                                                        Rp.
                                                                        {{number_format($item->product->harga_produk,
                                                                        '2',
                                                                        ',', '.')}}
                                                                    </b> <br>
                                                                    <b>
                                                                        Qty {{$item->product->qty_produk}}
                                                                    </b>
                                                                </td>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <b>
                                                                        Rp.
                                                                        {{number_format($item->product->harga_produk, 2,
                                                                        ',',
                                                                        '.')}} x {{$item->total_qty}} = <br> Rp.
                                                                        {{number_format($item->product->harga_produk *
                                                                        $item->total_qty, 2, ',',
                                                                        '.')}}
                                                                    </b>
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-opacity-warning">
                                                                        {{$item->status}}
                                                                    </span>
                                                                    <br>
                                                                    @if ($item->status == "Diproses")
                                                                    <span class="badge badge-opacity-success mt-2">
                                                                        Sudah dibayar
                                                                    </span>
                                                                    @else
                                                                    <span class="badge badge-opacity-warning mt-2">
                                                                        Belum dibayar
                                                                    </span>
                                                                    @endif
                                                                    @can('isUser')
                                                                    @if ($item->status === "Pending")
                                                                    <a href="{{route('pembayaran', $item->id)}}"
                                                                        class="btn btn-sm btn-success mt-2">
                                                                        Bayar Sekarang
                                                                    </a>
                                                                    @endif
                                                                    @endcan
                                                                </td>
                                                            </tr>
                                                            @empty
                                                            <tr>
                                                                <td colspan="6">
                                                                    <p class="text-center">Maaf data belum tersedia</p>
                                                                </td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection