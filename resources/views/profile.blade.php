@extends('layouts.frontend')


@section('title', 'Dunia Parcel | Jasa Ekspedisi')
@section('content')

    <div class="main-features">
        <div class="container px-mobile-fix">
            <div class="section-header py-lg-3 text-lg-center">
                <div class="mx-lg-8">
                    <div class="mx-lg-8">
                        <h3 class="h3 my-5">Data Profil</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                </div>
                <div class="col-md-6">
                    <h3 class="h3">Informasi Pribadi</h3>
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-4">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group mt-4">
                            <label>Username</label>
                            <input type="text" class="form-control mt-2" value="{{ Auth::user()->username }}" readonly>
                        </div>
                        <div class="form-group mt-4">
                            <label>Email</label>
                            <input type="text" class="form-control mt-2" value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>

                    </form>

                </div>
                <div class="col-md-6">
                    <h3 class="h3">Ganti Password</h3>
                    <form method="POST" action="{{ route('profile.update.password') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-4">
                            <label>Password Lama</label>
                            <input type="password" name="oldPassword"
                                class="form-control mt-2 @error('oldPassword') is-invalid @enderror"
                                style="background: none; border: 2px solid #CED4D9" placeholder="Password Lama" required>
                            <div class="invalid-feedback">
                                Masukan Password Lama
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label>Password</label>
                            <input type="password" name="password"
                                class="form-control mt-2 @error('password') is-invalid @enderror"
                                style="background: none; border: 2px solid #CED4D9" placeholder="Password Baru" required>
                            <div class="invalid-feedback">
                                Konfirmasi Password Baru Tidak Sesuai
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label>Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation"
                                class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9" placeholder="Konfirmasi Password Baru"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Update Password</button>

                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
