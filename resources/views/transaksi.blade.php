@extends('layouts.frontend')


@section('title', 'Dunia Parcel | Jasa Ekspedisi')
@section('content')

    <div class="main-features">
        <div class="container px-mobile-fix">

            <div class="section-header py-lg-3 text-lg-center">
                <div class="mx-lg-8">
                    <div class="mx-lg-8">
                        <h3 class="h3 my-5">Data Transaksi</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h3">Tabel Transaksi</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 15%">Tanggal Transaksi</th>
                                <th style="width: 15%">Kode Transaksi</th>
                                <th>Nomor Resi</th>
                                <th>Status</th>
                                <th style="width: 10%">Aksi</th>
                            </tr>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->created_at }}</td>
                                        <td>{{ $transaction->kode_transaksi }}</td>
                                        <td>{{ $transaction->no_resi ?? 'Belum Tersedia' }}</td>
                                        <td>
                                            @if ($transaction->status == 'PENDING')
                                                <span class="badge bg-warning">PENDING</span>
                                            @elseif($transaction->status == 'ON PROGRESS')
                                                <span class="badge bg-warning">ON PROGRESS</span>
                                            @elseif($transaction->status == 'SUDAH BAYAR')
                                                <span class="badge bg-success">SUDAH BAYAR</span>
                                            @elseif($transaction->status == 'DELIVERED')
                                                <span class="badge bg-success">DELIVERED</span>
                                            @else
                                                <span class="badge bg-danger">CANCELLED</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button  id="detail" data-toggle="modal" data-target="#detail-transaksi"
                                                data-tanggal_transaksi="{{ $transaction->created_at }}"
                                                data-kode_transaksi="{{ $transaction->kode_transaksi }}"
                                                data-no_resi="{{ $transaction->no_resi }}"
                                                data-nama_paket="{{ $transaction->paket->nama_paket }}"
                                                data-nama_pengirim="{{ $transaction->nama_pengirim }}"
                                                data-nama_penerima="{{ $transaction->nama_penerima }}"
                                                data-nomor_hp_penerima="{{ $transaction->nomor_hp_penerima }}"
                                                data-alamat_penerima="{{ $transaction->alamat_penerima }}"
                                                data-nama_barang="{{ $transaction->nama_barang }}"
                                                data-jenis_barang="{{ $transaction->jenis_barang }}"
                                                data-berat_barang="{{ $transaction->berat_barang }}"
                                                data-status="{{ $transaction->status }}"
                                                data-total_harga="{{ $transaction->total_harga }}"

                                                class="btn btn-info btn-sm text-white">Detail</button>
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

    <div class="modal fade" id="detail-transaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000">Detail Transkasi</h5>

                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 50%">Tanggal Transaksi</th>
                            <td id="tanggal_transaksi"></td>
                        </tr>
                         <tr>
                            <th style="width: 50%">Kode Transaksi</th>
                            <td id="kode_transaksi"></td>
                        </tr>
                         <tr>
                            <th style="width: 50%">No Resi</th>
                            <td id="no_resi"></td>
                        </tr>
                         <tr>
                            <th style="width: 50%">Nama Paket</th>
                            <td id="nama_paket"></td>
                        </tr>
                        <tr>
                            <th style="width: 50%">Nama Pengirim</th>
                            <td id="nama_pengirim"></td>
                        </tr>
                        <tr>
                            <th style="width: 50%">Nama Penerima</th>
                            <td id="nama_penerima"></td>
                        </tr>
                        <tr>
                            <th style="width: 50%">Nomor Handphone Penerima</th>
                            <td id="nomor_hp_penerima"></td>
                        </tr>
                         <tr>
                            <th style="width: 50%">Alamat Penerima</th>
                            <td id="alamat_penerima"></td>
                        </tr>
                        <tr>
                            <th style="width: 50%">Nama Barang</th>
                            <td id="nama_barang"></td>
                        </tr>
                        <tr>
                            <th style="width: 50%">Jenis Barang</th>
                            <td id="jenis_barang"></td>
                        </tr>
                        <tr>
                            <th style="width: 50%">Berat Barang</th>
                            <td id="berat_barang"></td>
                        </tr>
                        <tr>
                            <th style="width: 50%">Status</th>
                            <td id="status"></td>
                        </tr>
                        <tr>
                            <th style="width: 50%">Total Harga</th>
                            <td id="total_harga"></td>
                        </tr>

                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
@push('down-script')
<script>
    $(document).ready(function() {
          function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            function statusTransaksi(status) {
                    if (status == 'PENDING') {
                        return '<span class="text-white badge bg-warning">PENDING</span>';
                    } else if (status == 'ON PROGRESS') {
                        return '<span class="text-white badge bg-warning">ON PROGRESS</span>';
                    } else if (status == 'SUDAH BAYAR') {
                        return '<span class="text-white badge bg-success">SUDAH BAYAR</span>';
                    }else if (status == 'DELIVERED') {
                        return '<span class="text-white badge bg-success">DELIVERED</span>';
                    }
                    else {
                        return '<span class="text-white badge bg-danger">CANCELLED</span>';
                    }
                }
        $(document).on('click', '#detail', function() {
            $('#status').empty();
            var tanggal_transaksi = $(this).data('tanggal_transaksi');
            var kode_transaksi = $(this).data('kode_transaksi');
            var no_resi = $(this).data('no_resi');

            var nama_paket = $(this).data('nama_paket');
            var nama_pengirim = $(this).data('nama_pengirim');
            var nama_penerima = $(this).data('nama_penerima');
            var nomor_hp_penerima = $(this).data('nomor_hp_penerima');
            var alamat_penerima = $(this).data('alamat_penerima');
            var nama_barang = $(this).data('nama_barang');
            var jenis_barang = $(this).data('jenis_barang');
            var berat_barang = $(this).data('berat_barang');
            var status = $(this).data('status');
            var total_harga = $(this).data('total_harga');

            if(no_resi == '' || no_resi == null) {
                no_resi = 'Belum Tersedia';
            }

            $('#tanggal_transaksi').text(tanggal_transaksi);
            $('#kode_transaksi').text(kode_transaksi);
            $('#no_resi').text(no_resi);
            $('#nama_paket').text(nama_paket);
            $('#nama_pengirim').text(nama_pengirim);
            $('#nama_penerima').text(nama_penerima);
            $('#nomor_hp_penerima').text(nomor_hp_penerima);
            $('#alamat_penerima').text(alamat_penerima);
            $('#nama_barang').text(nama_barang);
            $('#jenis_barang').text(jenis_barang);
            $('#berat_barang').text(berat_barang + 'KG');
            $('#status').append(statusTransaksi(status));
            $('#total_harga').text('Rp' + numberWithCommas(total_harga));

        });
    });
</script>
@endpush
    @endsection
