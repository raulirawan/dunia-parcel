@extends('layouts.frontend')


@section('title','Dunia Parcel | Jasa Ekspedisi')
@section('content')
<div class="slider-container_v_promo">
    <header class="front-banner position-relative pt-5 pb-3 pt-lg-4 pb-lg-4 overflow-hidden">
        <div class="container px-mobile-fix">
            <div>
                <div class="row align-items-center my-lg-4">
                    <div class="col-lg-5 order-lg-0">
                        <div class="product-hero-margin ms-lg-4">
                            <div class="mx-lg-4">
                                <div class="slider-exodus">
                                    <img alt="J&amp;T Express Siap Menjangkau Seluruh Indonesia"
                                        width="437px"
                                        src="{{ asset('template/promo_kj_assets/images/home.png') }}"
                                        class="img-fluid" />
                                    <!--                                                <img alt="PestaPoraDuniaParcel" width="437px" src="-->
                                    <!--" class="img-fluid" />-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1">
                        <div class="wrapper me-lg-8 mt-4 mt-lg-5 mb-lg-5">
                            <h2 class="h1 me-lg-8">Dunia Parcel</h2>
                            <p class="lead">Adalah jasa pengiriman ekspedisi tercepat di
                                indonesia</p>
                            <ul class="list-check mt-3 mb-4">
                                <li>Gratis Biaya Pendaftaran</li>
                                <li>Gratis Biaya Layanan</li>
                                <li>Customer Support GESIT</li>
                                <!--                                            <li>Banyak Hadiahnya</li>-->
                            </ul>
                            <div class="divider mt-4"></div>
                            <div class="mt-3 mt-lg-4">
                                <div class="row">
                                    <div class="col-lg pb-3">
                                        <a href="{{ route('pengiriman.index') }}"
                                            class="btn btn-lg btn-primary full-radius">Daftar
                                            Sekarang!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</div>


<div class="main-features">
    <div class="container px-mobile-fix">
        <div class="section-header py-lg-3 text-lg-center">
            <div class="mx-lg-8">
                <div class="mx-lg-8">
                    <h3 class="h3 my-5">Untuk Semua Kebutuhan Pengiriman Paketmu</h3>
                </div>
            </div>
        </div>
        <div class="row g-3 mt-3">
            <div class="col-lg-4">
                <div class="card with-accent-parent border-0 h-100 elevation-super accent-dark">
                    <div class="col-auto d-inline-flex col-lg-12 d-lg-block">
                        <div class="with-accent px-4 py-2 mt-3">
                            <div
                                class="text-white d-inline-flex p-2 p-lg-3 elevation-1 full-radius bg-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="3" />
                                    <rect x="3" y="6" width="18" height="12" rx="2" />
                                    <line x1="18" y1="12" x2="18.01" y2="12" />
                                    <line x1="6" y1="12" x2="6.01" y2="12" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12">
                        <div class="card-body px-lg-4 pb-lg-4">
                            <h4 class="card-title">Layanan Terintegrasi</h4>
                            <p>Dashboard, API, Dan Mobile kami sediakan untuk mengontrol & monitoring
                                lebih mudah.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card with-accent-parent border-0 h-100 elevation-super accent-warning">
                    <div class="col-auto d-inline-flex col-lg-12 d-lg-block">
                        <div class="with-accent px-4 py-2 mt-3">
                            <div
                                class="text-white d-inline-flex p-2 p-lg-3 elevation-1 full-radius bg-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="7" cy="17" r="2" />
                                    <circle cx="17" cy="17" r="2" />
                                    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                    <line x1="3" y1="9" x2="7" y2="9" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12">
                        <div class="card-body px-lg-4 pb-lg-4">
                            <h4 class="card-title">Ekspedisi Terbaik</h4>
                            <p>Kamu bisa pilih layanan sameday, next day, reguler, ekonomi, kargo dan
                                lainya sesukamu.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card with-accent-parent border-0 h-100 elevation-super accent-primary">
                    <div class="col-auto d-inline-flex col-lg-12 d-lg-block">
                        <div class="with-accent px-4 py-2 mt-3">
                            <div
                                class="text-white d-inline-flex p-2 p-lg-3 elevation-1 full-radius bg-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12">
                        <div class="card-body px-lg-4 pb-lg-4">
                            <h4 class="card-title">Sitem Otomatis</h4>
                            <p>Cetak resi / AWB, tracking, saldo COD dan banyak fitur lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card with-accent-parent border-0 h-100 elevation-super accent-secondary">
                    <div class="col-auto d-inline-flex col-lg-12 d-lg-block">
                        <div class="with-accent px-4 py-2 mt-3">
                            <div
                                class="text-white d-inline-flex p-2 p-lg-3 elevation-1 full-radius bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="13" rx="2" width="4" height="6" />
                                    <rect x="16" y="13" rx="2" width="4" height="6" />
                                    <path d="M4 15v-3a8 8 0 0 1 16 0v3" />
                                    <path d="M18 19a6 3 0 0 1 -6 3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12">
                        <div class="card-body px-lg-4 pb-lg-4">
                            <h4 class="card-title">Selalu Ada Untukmu</h4>
                            <p>Kami selalu ada setiap hari tanpa libur (09.00 - 23.00) bersama pihak
                                expedisi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card with-accent-parent border-0 h-100 elevation-super accent-info">
                    <div class="col-auto d-inline-flex col-lg-12 d-lg-block">
                        <div class="with-accent px-4 py-2 mt-3">
                            <div
                                class="text-white d-inline-flex p-2 p-lg-3 elevation-1 full-radius bg-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-pie-chart">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12">
                        <div class="card-body px-lg-4 pb-lg-4">
                            <h4 class="card-title">Laporan Aktual</h4>
                            <p>Kemudahan pantau paket, pencairan COD, saldo, semuanya.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card with-accent-parent border-0 h-100 elevation-super accent-danger">
                    <div class="col-auto d-inline-flex col-lg-12 d-lg-block">
                        <div class="with-accent px-4 py-2 mt-3">
                            <div
                                class="text-white d-inline-flex p-2 p-lg-3 elevation-1 full-radius bg-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12">
                        <div class="card-body px-lg-4 pb-lg-4">
                            <h4 class="card-title">Friendly</h4>
                            <p>Ciptakan solusi terbaik dengan masukan, kritik, dan diskusi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="info-card mt-5">
    <div class="container px-mobile-fix">
        <div>
            <div class="card with-accent-parent border-0 h-100 elevation-super accent-info">
                <div class="card-body m-4 px-lg-4 pb-lg-4">
                    <h4 class="h3_2 mb-3">Mengapa Harus Menggunakan DuniaParcel</h4>
                    <p>Kami akan memaksimalkan dan memberikan <b>solusi yang terbaik untuk kendala
                            pengiriman paket</b> yang kamu alami. Penjemputan paket, membantu pengiriman
                        paket dengan aman dan meminimalkan tingkatan return yang kecil.
                        Kami berkolaborasi dengan ekspedisi berkomitmen untuk selalu tepat waktu dalam
                        <b>pengiriman agar lancar dan aman</b> sampai tujuan</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="info-card mt-5">
    <div class="container px-mobile-fix">
        <div>
            <div class="card with-accent-parent border-0 h-100 elevation-super accent-info">
                <div class="card-body m-4 px-lg-4 pb-lg-4">
                    <h4 class="h3_2 mb-3">Masih Kurang ?</h4>
                    <p>Yuk eksplore biar gak penasaran...</p>
                    <div class="row my-4">
                        <div class="col-lg">
                            <ul class="list-check-2 mt-3 mb-4 me-lg-5">
                                <li>Berbagai service expedisi sameday, kargo dan lainnya.</li>
                                <li>Penjemputan paket tanpa minimal kiriman.</li>
                                <li>Fitur dropoff atau cashless.</li>
                                <li>Kirim paket COD dengan pencairan tercepat.</li>
                                <li>Platform mudah digunakan (<i>user friendly</i>).</li>
                                <li>Meminimalisir rasio retur.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6"><img
                                src="template/promo_kj_assets/images/v2/banner-home-2.png" alt=""
                                class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info-card faq-section mt-5">
    <div class="container px-mobile-fix">
        <div>
            <div class="m-4 px-lg-4 pb-lg-4">
                <h4 class="h3_2 mb-5">FAQ</h4>
                <div class="row">
                    <div class="col-12 mx-2">
                        <div class="row">
                            <div class="col-12">
                                <p class="fw-bold">
                                    Apakah dunia Parcel adalah salah satu Ekspedisi ?
                                </p>
                                <p class="answer">
                                    Bukan. DuniaParcel adalah satu aplikasi yang melingkup
                                    Ekspedisi-ekspedisi Favorti dan terbaik di Indonesia.
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="fw-bold">
                                    Siapa yang cocok dengan Aplikasi kirminAja?
                                </p>
                                <p class="answer">
                                    DuniaParcel sangat cocok untuk kamu yang berjualan diluar
                                    marketplace.
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="fw-bold">
                                    Apakah bisa kirim produk ke seluruh Indonesia?
                                </p>
                                <p class="answer">
                                    DI Aplikasi dunia Parcel kamu bisa pilihhh ekspedisi yang tersedia di
                                    lokasi tujuanmu.
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="fw-bold">
                                    Berapa biaya berlangganan DuniaParcel?
                                </p>
                                <p class="answer">
                                    Aplikasi kirminAja bisa kamu manfaatkan secara Gratis. Tidak akan
                                    ada iklan atau pungutan biaya.
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="fw-bold">
                                    Apakah dunia Parcel Cocok untuk COD?
                                </p>
                                <p class="answer">
                                    Fitur terbaik dari Aplikasi DuniaParcel adalah COD yang bisa cair
                                    dalam waktu tercepat (rata-rata 1 hari)
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="fw-bold">
                                    Apakah dengan dunia Parcel paket bisa di Jemput di rumah?
                                </p>
                                <p class="answer">
                                    Dengan aplikasi dunia Parcel paket kamu bisa langsung di jemput oleh
                                    Ekspedisi yang kamu pilih dari aplikasi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
