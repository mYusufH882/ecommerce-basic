<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{Route::is('/') ? 'active' : ''}}">
            <a class="nav-link" href="/dashboard">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">menu</li>
        @can('isAdmin')
        <li class="nav-item {{Route::is('kategori.*') ? 'active' : ''}}">
            <a class="nav-link" href="/kategori">
                <i class="menu-icon mdi mdi-apps"></i>
                <span class="menu-title">Kategori</span>
            </a>
        </li>
        <li class="nav-item {{Route::is('produk.*') ? 'active' : ''}}">
            <a class="nav-link" href="/produk">
                <i class="menu-icon mdi mdi-archive"></i>
                <span class="menu-title">Produk</span>
            </a>
        </li>
        @endcan
        <li class="nav-item {{Route::is('/transaksi') ? 'active' : ''}}">
            <a class="nav-link" href="/transaksi">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Transaksi</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="menu-icon mdi mdi-amazon"></i>
                <span class="menu-title">Katalog</span>
            </a>
        </li>
        <li class="nav-item nav-category">pengaturan</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/profile"> Profil Saya </a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>