@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Kategori</h4>
                    <a href="{{route('kategori.create')}}" class="btn btn-primary mb-3 mt-2">
                        <i class="mdi mdi-account-plus me-1"></i>
                        Tambah Kategori Baru
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
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item)
                                <tr>
                                    <td style="width: 15px;">{{$loop->iteration}}</td>
                                    <td>{{$item->nama_kategori}}</td>
                                    <td>
                                        <a href="{{route('kategori.edit', $item->id)}}" class="btn btn-sm btn-warning">
                                            <i class="mdi mdi-arrange-bring-forward me-1"></i> Edit
                                        </a>
                                        <form action="{{ route('kategori.destroy', $item->id) }}" method="post"
                                            class="d-inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah anda ingin menghapus data {{$item->nama_kategori}} ini?')">
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