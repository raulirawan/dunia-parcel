@extends('layouts.frontend')


@section('title', 'Dunia Parcel | Jasa Ekspedisi')
@section('content')
    <style>
        .sk-chase {
            width: 40px;
            height: 40px;
            position: relative;
            animation: sk-chase 2.5s infinite linear both;
        }

        .sk-chase-dot {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            animation: sk-chase-dot 2.0s infinite ease-in-out both;
        }

        .sk-chase-dot:before {
            content: '';
            display: block;
            width: 25%;
            height: 25%;
            background-color: #fff;
            border-radius: 100%;
            animation: sk-chase-dot-before 2.0s infinite ease-in-out both;
        }

        .sk-chase-dot:nth-child(1) {
            animation-delay: -1.1s;
        }

        .sk-chase-dot:nth-child(2) {
            animation-delay: -1.0s;
        }

        .sk-chase-dot:nth-child(3) {
            animation-delay: -0.9s;
        }

        .sk-chase-dot:nth-child(4) {
            animation-delay: -0.8s;
        }

        .sk-chase-dot:nth-child(5) {
            animation-delay: -0.7s;
        }

        .sk-chase-dot:nth-child(6) {
            animation-delay: -0.6s;
        }

        .sk-chase-dot:nth-child(1):before {
            animation-delay: -1.1s;
        }

        .sk-chase-dot:nth-child(2):before {
            animation-delay: -1.0s;
        }

        .sk-chase-dot:nth-child(3):before {
            animation-delay: -0.9s;
        }

        .sk-chase-dot:nth-child(4):before {
            animation-delay: -0.8s;
        }

        .sk-chase-dot:nth-child(5):before {
            animation-delay: -0.7s;
        }

        .sk-chase-dot:nth-child(6):before {
            animation-delay: -0.6s;
        }

        @keyframes sk-chase {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes sk-chase-dot {

            80%,
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes sk-chase-dot-before {
            50% {
                transform: scale(0.4);
            }

            100%,
            0% {
                transform: scale(1.0);
            }
        }
    </style>
    <div class="main-features">
        <div class="container px-mobile-fix">
            <div class="section-header py-lg-3 text-lg-center">
                <div class="mx-lg-8">
                    <div class="mx-lg-8">
                        <h3 class="h3 my-5">Form Data Pengiriman</h3>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">

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
                        <h3 class="h3">Data Pengirim</h3>

                        <div class="form-group mt-4">
                            <label>Nama Pengirim</label>
                            <input type="text" name="nama_pengirim" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9" placeholder="Nama Pengirim">
                        </div>
                        <div class="form-group mt-4">
                            <label>Nomor Handphone Pengirim</label>
                            <input type="number" name="nomor_hp_pengirim" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9" placeholder="Nomor Handphone Pengirim">
                        </div>
                        <div class="form-group mt-4">
                            <label>Alamat Pengirim</label>
                            <textarea name="alamat_pengirim" class="form-control mt-2" style="background: none; border: 2px solid #CED4D9"
                                placeholder="Alamat Pengirim"></textarea>
                        </div>



                    </div>
                    <div class="col-md-6">
                        <h3 class="h3">Data Penerima</h3>
                        <div class="form-group mt-4">
                            <label>Nama Penerima</label>
                            <input type="text" name="nama_penerima" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9" placeholder="Nama Penerima">
                        </div>
                        <div class="form-group mt-4">
                            <label>Nomor Handphone Penerima</label>
                            <input type="number" name="nomor_hp_penerima" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9" placeholder="Nomor Handphone Penerima">
                        </div>
                        <div class="form-group mt-4">
                            <label>Alamat Penerima</label>
                            <textarea name="alamat_penerima" class="form-control mt-2" style="background: none; border: 2px solid #CED4D9"
                                placeholder="Alamat Penerima"></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label>Provinsi</label>
                            <select name="provinsi" id="provinces" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($provinces as $provincy)
                                    <option ption value="{{ $provincy->id }}">{{ $provincy->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label>Kota</label>
                            <select class="form-control mt-2" style="background: none; border: 2px solid #CED4D9"
                                name="kota" id="regencies">
                                <option value="" disable="true" selected="true"> Pilih Kota </option>
                            </select>
                        </div>

                        <div class="form-group mt-4">
                            <label>Kecamatan</label>
                            <select class="form-control mt-2" style="background: none; border: 2px solid #CED4D9"
                                name="kecamatan" id="districts">
                                <option value="" disable="true" selected="true"> Pilih Kecamatan </option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label>Kelurahan</label>
                            <select class="form-control mt-2" style="background: none; border: 2px solid #CED4D9"
                                name="kelurahan" id="villages">
                                <option value="" disable="true" selected="true"> Pilih Kelurahan </option>
                            </select>
                        </div>

                    </div>



                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 class="h3">Data Barang</h3>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Barang</label>
                            <input type="text" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9" value="{{ old('nama_barang') }}"
                                name="nama_barang" placeholder="Nama Barang">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Barang</label>
                            <input type="text" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9" value="{{ old('jenis_barang') }}"
                                name="jenis_barang" placeholder="Jenis Barang">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Paket</label>
                            <select name="paket" id="paket" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9">
                                <option value="">Pilih Paket</option>
                                @foreach ($pakets as $paket)
                                    <option value="{{ $paket->id }}-{{ $paket->harga }}">
                                        {{ $paket->nama_paket }} - ({{ number_format($paket->harga) }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Berat Barang (kg)</label>
                            <input type="berat_barang" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9" value="{{ old('berat_barang') }}"
                                name="berat_barang" id="berat_barang" placeholder="Berat Barang (kg)">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Panjang (cm)</label>
                                    <input type="number" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9"
                                        valuel mt-2"
                                style="background: none; border: 2px solid #CED4D9"{{ old('panjang') }}" name="panjang" id="panjang" placeholder="Panjang Barang (cm)">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lebar (cm)</label>
                                    <input type="number" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9"
                                        value="{{ old('lebar') }}" name="lebar" id="lebar" placeholder="Lebar Barang (cm)">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tinggi (cm)</label>
                                    <input type="number" class="form-control mt-2"
                                style="background: none; border: 2px solid #CED4D9"
                                        value="{{ old('tinggi') }}" name="tinggi" id="tinggi" placeholder="Tinggi Barang (cm)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5 mb-5">
                        <div class="text-bold">Total Harga : <span id="total_harga"></span></div>
                    </div>

                    <button class="btn btn-success" type="button" id="buat-transaksi">
                        <span id="text-button">Buat Transaksi</span>
                        <span id="spinner" class="d-none spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      </button>


                </div>
            </form>


        </div>
    </div>
    @push('down-script')
        <script type="text/javascript">
            $('#provinces').on('change', function(e) {
                var province_id = e.target.value;
                $.get('/regencies?province_id=' + province_id, function(data) {
                    $('#regencies').empty();
                    $('#regencies').append(
                        '<option value="0" disable="true" selected="true"> Pilih Kota </option>');
                    $('#districts').empty();
                    $('#districts').append(
                        '<option value="0" disable="true" selected="true"> Pilih Kecamatan </option>');
                    $('#villages').empty();
                    $('#villages').append(
                        '<option value="0" disable="true" selected="true"> Pilih Kelurahan</option>');
                    $.each(data, function(index, regenciesObj) {
                        $('#regencies').append('<option value="' + regenciesObj.id + '">' + regenciesObj
                            .name + '</option>');
                    })
                });
            });
            $('#regencies').on('change', function(e) {
                var regencies_id = e.target.value;
                $.get('/districts?regencies_id=' + regencies_id, function(data) {
                    $('#districts').empty();
                    $('#districts').append(
                        '<option value="0" disable="true" selected="true"> Pilih Kecamatan </option>');
                    $.each(data, function(index, districtsObj) {
                        $('#districts').append('<option value="' + districtsObj.id + '">' + districtsObj
                            .name + '</option>');
                    })
                });
            });
            $('#districts').on('change', function(e) {
                var districts_id = e.target.value;
                $.get('/village?districts_id=' + districts_id, function(data) {
                    $('#villages').empty();
                    $('#villages').append(
                        '<option value="0" disable="true" selected="true"> Pilih Kelurahan</option>');
                    $.each(data, function(index, villagesObj) {
                        $('#villages').append('<option value="' + villagesObj.id + '">' + villagesObj
                            .name + '</option>');
                        console.log("|" + villagesObj.id + "|" + villagesObj.district_id + "|" +
                            villagesObj.name);
                    })
                });
            });

            $('#paket').on('change', function() {
                var value = this.value;
                var harga = value.split("-");

                var harga = parseInt(harga[1]);

                var kg = $('[name=berat_barang]').val(1);
                var total_harga = harga * 1;

                $('#total_harga').text(total_harga);


            });

            $('#berat_barang').on('change keyup', function() {
                var kg = parseInt($('[name=berat_barang]').val());
                var harga = $("#paket option:selected").val();
                var harga = harga.split("-");
                var harga = parseInt(harga[1]);

                var total_harga = harga * kg;

                $('#total_harga').text(total_harga);

            });


            $('#buat-transaksi').click(function(e) {
                if (confirm("Buat Transaksi?")) {

                    var nama_pengirim = $('[name=nama_pengirim]').val();
                    var nama_penerima = $('[name=nama_penerima]').val();
                    var nomor_hp_penerima = $('[name=nomor_hp_penerima]').val();
                    var nomor_hp_pengirim = $('[name=nomor_hp_pengirim]').val();
                    var alamat_pengirim = $('[name=alamat_pengirim] ').val();
                    var provinsi = $('[name=provinsi] option:selected').text();
                    var kota = $('[name=kota] option:selected').text();
                    var kecamatan = $('[name=kecamatan] option:selected').text();
                    var kelurahan = $('[name=kelurahan] option:selected').text();
                    var alamat_penerima = $('[name=alamat_penerima] ').val();
                    var nama_barang = $('[name=nama_barang]').val();
                    var jenis_barang = $('[name=jenis_barang]').val();
                    var paket = $('[name=paket]').val();
                    var berat_barang = $('[name=berat_barang]').val();
                    var panjang = $('[name=panjang]').val();
                    var lebar = $('[name=lebar]').val();
                    var tinggi = $('[name=tinggi]').val();




                    var paket_id = paket.split("-");
                    var paket_id = paket[0];

                    var total_harga = $('#total_harga').text();


                    if (nama_pengirim.length == 0) {
                        alert('Nama Pengirim Tidak Boleh Kosong');
                        return false;
                    }

                    if (nomor_hp_penerima.length == 0) {
                        alert('Nomor Hp Pengirim Tidak Boleh Kosong');
                        return false;
                    }

                    if (alamat_pengirim.length == 0) {
                        alert('Nomor Hp Pengirim Tidak Boleh Kosong');
                        return false;
                    }

                    if (provinsi.length == 0) {
                        alert('Provinsi Tidak Boleh Kosong');
                        return false;
                    }

                    if (kota.length == 0) {
                        alert('Kota Tidak Boleh Kosong');
                        return false;
                    }
                    if (kecamatan.length == 0) {
                        alert('Kecamatan Tidak Boleh Kosong');
                        return false;
                    }
                    if (kelurahan.length == 0) {
                        alert('Kelurahan Tidak Boleh Kosong');
                        return false;
                    }
                    if (alamat_penerima.length == 0) {
                        alert('Alamat Penerima Tidak Boleh Kosong');
                        return false;
                    }
                    if (nama_barang.length == 0) {
                        alert('Nama Barang Tidak Boleh Kosong');
                        return false;
                    }
                    if (jenis_barang.length == 0) {
                        alert('Jenis Barang Tidak Boleh Kosong');
                        return false;
                    }
                    if (berat_barang.length == 0) {
                        alert('Berat Barabbg Tidak Boleh Kosong');
                        return false;
                    }
                    if (paket_id.length == 0) {
                        alert('Paket Tidak Boleh Kosong');
                        return false;
                    }
                    if(panjang.length == 0){
                        alert('Panjang Barang Tidak Boleh Kosong');
                        return false;
                    }
                    if(lebar.length == 0){
                        alert('Lebar Barang Tidak Boleh Kosong');
                        return false;
                    }
                    if(tinggi.length == 0){
                        alert('Tinggi Barang Tidak Boleh Kosong');
                        return false;
                    }
                    $("#text-button").addClass('d-none');
                    $("#buat-transaksi").prop('disabled', true);
                    $("#spinner").removeClass('d-none');
                    $.ajax({
                        type: "POST",
                        url: '{!! route('pengiriman.store') !!}',
                        data: {
                            nama_pengirim,
                            nama_penerima,
                            nomor_hp_penerima,
                            nomor_hp_pengirim,
                            alamat_pengirim,
                            provinsi,
                            kota,
                            kecamatan,
                            kelurahan,
                            alamat_penerima,
                            nama_barang,
                            jenis_barang,
                            berat_barang,
                            paket_id,
                            total_harga,
                            panjang,
                            lebar,
                            tinggi,
                            _token: $('meta[name="csrf-token"]').attr('content'),
                        },
                        success: function(result, textStatus, jqXHR) {
                            $("#text-button").removeClass('d-none');
                            $("#buat-transaksi").prop('disabled', false);
                            $("#spinner").addClass('d-none');
                            if (result.status == 'success') {
                                alert(result.message);
                                window.location.replace(result.url);
                            } else {
                                alert(result.message);
                                window.location.replace(result.url);
                            }
                        }
                    });
                }

            });
        </script>
    @endpush
@endsection
