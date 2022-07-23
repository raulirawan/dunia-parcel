@extends('layouts.dashboard-admin')

@section('title', 'Halaman Pengiriman')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Pengiriman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pengiriman</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{-- <form method="POST" action="#" enctype="multipart/form-data">
                @csrf --}}
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Form Tambah Data Pengiriman</h3>
                            </div>
                            <!-- /.card-header -->

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-danger">Data Pengirim</div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Pengirim</label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('nama_pengirim') }}" name="nama_pengirim" placeholder="Nama Pengirim">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nomor Handpone Pengirim</label>
                                                <input type="number" class="form-control"
                                                    value="{{ old('nomor_hp_pengirim') }}" name="nomor_hp_pengirim" placeholder="Nomor Handpone Pengirim">
                                            </div>

                                            <div class="form-group">
                                                <label>Alamat Pengirim</label>
                                                <textarea name="alamat_pengirim" id="alamat_pengirim" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-danger">Data Penerima</div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Penerima</label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('nama_penerima') }}" name="nama_penerima" placeholder="Nama Penerima">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nomor Handpone Penerima</label>
                                                <input type="number" class="form-control"
                                                    value="{{ old('nomor_hp_penerima') }}" name="nomor_hp_penerima" placeholder="Nomor Handpone Penerima">
                                            </div>

                                            <div class="form-group">
                                                <label>Provinsi</label>
                                                <select class="form-control" name="provinsi" id="provinces">
                                                    <option value="" disable="true" selected="true">Pilih Provinsi<option>
                                                    @foreach ($provinces as $provincy)
                                                        <option value="{{$provincy->id}}">{{ $provincy->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kota</label>
                                                <select class="form-control" name="kota" id="regencies">
                                                    <option value="" disable="true" selected="true"> Pilih Kota </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kecamatan</label>
                                                <select class="form-control" name="kecamatan" id="districts">
                                                    <option value="" disable="true" selected="true"> Pilih Kecamatan </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kelurahan</label>
                                                <select class="form-control" name="kelurahan" id="villages">
                                                    <option value="" disable="true" selected="true"> Pilih Kelurahan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Penerima</label>
                                                <textarea name="alamat_penerima" id="alamat_penerima" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->


                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Barang</h3>
                            </div>
                            <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Barang</label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('nama_barang') }}" name="nama_barang" placeholder="Nama Barang">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenis Barang</label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('jenis_barang') }}" name="jenis_barang" placeholder="Jenis Barang">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Paket</label>
                                                <select name="paket" id="paket" class="form-control">
                                                    <option value="">Pilih Paket</option>
                                                    @foreach ($pakets as $paket)
                                                    <option value="{{ $paket->id }}-{{ $paket->harga }}">{{ $paket->nama_paket }} - ({{ number_format($paket->harga) }})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Berat Barang (kg)</label>
                                                <input type="berat_barang" class="form-control"
                                                    value="{{ old('berat_barang') }}" name="berat_barang" id="berat_barang" placeholder="Berat Barang (kg)">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Panjang (cm)</label>
                                                        <input type="number" class="form-control"
                                                            value="{{ old('panjang') }}" name="panjang" id="panjang" placeholder="Panjang Barang (cm)">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Lebar (cm)</label>
                                                        <input type="number" class="form-control"
                                                            value="{{ old('lebar') }}" name="lebar" id="lebar" placeholder="Lebar Barang (cm)">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Tinggi (cm)</label>
                                                        <input type="number" class="form-control"
                                                            value="{{ old('tinggi') }}" name="tinggi" id="tinggi" placeholder="Tinggi Barang (cm)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-bold">Total Harga : <span id="total_harga"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
                                </div>
                                <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>

            {{-- </form> --}}
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@push('down-script')
<script type="text/javascript">
    $('#provinces').on('change', function (e) {
        var province_id = e.target.value;
        $.get('/regencies?province_id=' + province_id, function (data) {
            $('#regencies').empty();
            $('#regencies').append('<option value="0" disable="true" selected="true"> Pilih Kota </option>');
            $('#districts').empty();
            $('#districts').append('<option value="0" disable="true" selected="true"> Pilih Kecamatan </option>');
            $('#villages').empty();
            $('#villages').append('<option value="0" disable="true" selected="true"> Pilih Kelurahan</option>');
            $.each(data, function (index, regenciesObj) {
                $('#regencies').append('<option value="' + regenciesObj.id + '">' + regenciesObj.name + '</option>');
            })
        });
    });
    $('#regencies').on('change', function (e) {
        var regencies_id = e.target.value;
        $.get('/districts?regencies_id=' + regencies_id, function (data) {
            $('#districts').empty();
            $('#districts').append('<option value="0" disable="true" selected="true"> Pilih Kecamatan </option>');
            $.each(data, function (index, districtsObj) {
                $('#districts').append('<option value="' + districtsObj.id + '">' + districtsObj.name + '</option>');
            })
        });
    });
    $('#districts').on('change', function (e) {
        var districts_id = e.target.value;
        $.get('/village?districts_id=' + districts_id, function (data) {
            $('#villages').empty();
            $('#villages').append('<option value="0" disable="true" selected="true"> Pilih Kelurahan</option>');
            $.each(data, function (index, villagesObj) {
                $('#villages').append('<option value="' + villagesObj.id + '">' + villagesObj.name + '</option>');
                console.log("|" + villagesObj.id + "|" + villagesObj.district_id + "|" + villagesObj.name);
            })
        });
    });

            $('#paket').on('change', function()
            {
                var value = this.value;
                var harga = value.split("-");

                var harga = parseInt(harga[1]);

                var kg = $('[name=berat_barang]').val(1);
                var total_harga = harga * 1;

                $('#total_harga').text(total_harga);


            });

            $('#berat_barang').on('change keyup', function() {
                var kg = parseInt($('[name=berat_barang]').val());
                var harga = $("#paket option:selected" ).val();
                var harga = harga.split("-");
                var harga = parseInt(harga[1]);

                var total_harga = harga * kg;

                $('#total_harga').text(total_harga);

            });


            $('#simpan').click(function(e) {
                if(confirm("Buat Transaksi?")) {

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


                    if(nama_pengirim.length == 0){
                        alert('Nama Pengirim Tidak Boleh Kosong');
                        return false;
                    }

                    if(nomor_hp_penerima.length == 0){
                        alert('Nomor Hp Pengirim Tidak Boleh Kosong');
                        return false;
                    }

                    if(alamat_pengirim.length == 0){
                        alert('Nomor Hp Pengirim Tidak Boleh Kosong');
                        return false;
                    }

                    if(provinsi.length == 0){
                        alert('Provinsi Tidak Boleh Kosong');
                        return false;
                    }

                    if(kota.length == 0){
                        alert('Kota Tidak Boleh Kosong');
                        return false;
                    }
                    if(kecamatan.length == 0){
                        alert('Kecamatan Tidak Boleh Kosong');
                        return false;
                    }
                    if(kelurahan.length == 0){
                        alert('Kelurahan Tidak Boleh Kosong');
                        return false;
                    }
                    if(alamat_penerima.length == 0){
                        alert('Alamat Penerima Tidak Boleh Kosong');
                        return false;
                    }
                    if(nama_barang.length == 0){
                        alert('Nama Barang Tidak Boleh Kosong');
                        return false;
                    }
                    if(jenis_barang.length == 0){
                        alert('Jenis Barang Tidak Boleh Kosong');
                        return false;
                    }
                    if(berat_barang.length == 0){
                        alert('Berat Barabbg Tidak Boleh Kosong');
                        return false;
                    }
                    if(paket_id.length == 0){
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

                    $.ajax({
                        type: "POST",
                        url: '{!! route('admin.pengiriman.index.store') !!}',
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
                        success: function (result, textStatus, jqXHR) {
                            if(result.status == 'success') {
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
