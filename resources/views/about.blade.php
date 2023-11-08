@extends('layouts.app')

@section('content')
@include('components.header')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-title">
                    <h3 class="text-center my-4">Tentang {{env('APP_NAME')}}</h3>
                </div>
                <div class="card-body text-center">
                    <p>
                        Web Ecommerce ini merupakan mini project yang bisa dijadikan portfolio, dan untuk kedepannya
                        kalian bisa mengembangkannya menjadi lebih baik dan bagus lagi dengan integrasi payment gateway,
                        fitur chart barang dan library lainnya yang mendukung sesuai dengan tema web ecommerce ini.
                    </p>
                    <p class="text-success">
                        Jangan lupa untuk follow github saya ya!!!
                    </p>
                    <a target="_blank" href="https://github.com/mYusufH882/ecommerce-basic"
                        class="btn btn-primary mb-3">Coba
                        kalian akses
                        repositori ini sebagai referensi</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.footer')
@endsection