      <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="admin.dashboard" class="logo">
                        <img src="{{ asset('kai') }}/assets/img/kaiadmin/digidaww.png" alt="navbar brand" class="navbar-brand"
                            height="50" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        
                       @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tambahProduk') }}">
                                <i class="fas fa-plus-square"></i>
                                <p>Tambah Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.transaksi') }}">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Lihat Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.lihatAkun') }}">
                                <i class="fas fa-plus-square"></i>
                                <p>Lihat Akun</p>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a href="{{ route('admin.tambah-akun') }}">
                                <i class="fas fa-plus-square"></i>
                                <p>Tambah Akun</p>
                            </a>
                        </li>
                        
                        
                        

                        @elseif (Auth::user()->role == 'customer')
                        <li class="nav-item">
                            <a href="{{ route('customer.dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Lihat Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('customer.transaksi') }}">
                                <i class="fas fa-shopping-cart"></i>
                                <p>RiwayatTransaksi</p>
                            </a>
                        </li>

                        @elseif (Auth::user()->role == 'kurir')
                        <li class="nav-item">
                            <a href="{{ route('kurir.transaksi') }}">
                                <i class="fas fa-shopping-cart"></i>
                                <p>Lihat Pesanan</p>
                            </a>
                        </li>
                       @endif
                      
                        
                        
                    </ul>
                </div>
            </div>
        </div>