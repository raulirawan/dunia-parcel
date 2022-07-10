<nav class="navbar navbar-expand-lg  with-gradient navbar-light " id="main-navbar" style="z-index: 99999">
    <div class="container px-mobile-fix">
        <button type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler no-shadow border-0">
            <svg viewBox="0 0 24 24" width="24px" height="24px" fill="none" xmlns="http://www.w3.org/2000/svg"
                stroke="currentColor" class="h-6 w-6">
                <path d="M4 6H20M4 12H20M4 18C5.36683 18 6.13317 18 7.5 18C8.86683 18 11 18 11 18" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
        <a href="/" aria-current="page" class="navbar-brand nuxt-link-exact-active nuxt-link-active">
            <img src="{{ asset('assets/logo.png') }}" width="80px" alt="Company Logo">
        </a>
        <a href="//dashboard.kiriminaja.com" class="navbar-toggler no-shadow border-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="7" r="4"></circle>
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
            </svg>
        </a>
        <div id="navbarSupportedContent" class="collapse navbar-collapse mt-4 mt-lg-0">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item me-lg-3">
                        <a href="{{ route('login') }}" class="nav-link fw-medium  full-radius py-2 px-4  mt-2">Masuk</a>
                    </li>
                    <li class="nav-item me-lg-3">
                        <a href="{{ route('register') }}" class="nav-link fw-medium  full-radius py-2 px-4  mt-2">Daftar
                            Akun</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a href="#" id="layanan" role="button" aria-expanded="false"
                            class="nav-link dropdown-toggle">HALO, {{ strtoupper(Auth::user()->name) }}</a>
                        <div data-bind="#layanan" class="dropdown-menu">
                            <a href="{{ route('transaction.index') }}" class="dropdown-item ">
                                Transaksi
                            </a>
                            <a href="{{ route('profile.index') }}" class="dropdown-item ">
                                Profil
                            </a>
                            <a href="{{ route('logout') }}" class="dropdown-item " onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                        </div>
                    </li>
                @endauth
                <li class="nav-item me-lg-3">
                    <button data-toggle="modal" data-target="#cekResi"

                        class="nav-link fw-medium btn full-radius py-2 px-4 btn-primary text-white mt-2">Cek
                        Resi</button>
                </li>
                <li class="nav-item me-lg-3">
                    <a
                        href="{{ route('pengiriman.index') }}"
                        class="nav-link fw-medium btn full-radius py-2 px-4 btn-primary text-white mt-2">Pengiriman</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                {{-- <li class="nav-item d-lg-flex align-items-center" id="try-now">
                <button data-toggle="modal"
                data-target="#cekResi" class="btn full-radius py-2 btn-primary text-white">Cek Resi</button>
            </li> --}}
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="cekResi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #000">Form Cek Resi</h5>

            </div>
            <div class="modal-body">
                <form method="GET" action="{{ route('check.resi') }}" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Resi</label>
                            <input type="text" class="form-control" style="background: #eee !important"
                                value="{{ old('no_resi') }}" name="no_resi" placeholder="No Resi" required>
                        </div>

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Cek Resi</button>
            </div>
            </form>

        </div>
    </div>
</div>
