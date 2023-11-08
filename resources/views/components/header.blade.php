<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                @auth
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a></li>
                @endauth
                @guest
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                @endguest
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">All Products</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                    </ul>
                </li>
            </ul>
            @auth
            <div class="d-flex">
                <a href="/transaksi" class="btn btn-outline-dark me-2" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Riwayat Transaksi
                    {{-- <span class="badge bg-dark text-white ms-1 rounded-pill">{{$data['jtransaksi']}}</span> --}}
                </a>
                <a href="{{route('logout')}}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="btn btn-danger"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign
                    Out</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            @endauth
            @guest
            <div class="d-flex">
                <a href="/login" class="btn btn-outline-dark">
                    <i class="bi bi-box-arrow-in-right me-1"></i>
                    Login
                </a>
            </div>
            @endguest
        </div>
    </div>
</nav>