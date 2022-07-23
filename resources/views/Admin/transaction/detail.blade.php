@extends('layouts.dashboard-admin')

@section('title','Halaman Detail Transaksi')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">
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
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Detail Transaksi</h3>
                  <a href="{{ url()->previous() }}" class="btn btn-primary mt-3 btn-xs" style="float: right">Kembali</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">

                    <tbody>
                        <tr>
                            <th style="width: 400px">Tanggal Transaksi</th>
                            <td>{{ $transaction->created_at }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Kode Transaksi</th>
                            <td>{{ $transaction->kode_transaksi }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Nomor Resi</th>
                            <td>{{ $transaction->no_resi ?? 'Belum Ada' }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Nama Pengirim</th>
                            <td>{{ $transaction->nama_pengirim }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Nomor Pengirim</th>
                            <td>{{ $transaction->nomor_hp_pengirim }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Alamat Pengirim</th>
                            <td>{{ $transaction->alamat_pengirim }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Nama Penerima</th>
                            <td>{{ $transaction->nama_penerima }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Nomor Hp Penerima</th>
                            <td>{{ $transaction->nomor_hp_penerima }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Provinsi</th>
                            <td>{{ $transaction->provinsi }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Kota</th>
                            <td>{{ $transaction->kota }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Kecamatan</th>
                            <td>{{ $transaction->kecamatan }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Kelurahan</th>
                            <td>{{ $transaction->kelurahan }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Nama Barang</th>
                            <td>{{ $transaction->nama_barang }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Jenis Barang</th>
                            <td>{{ $transaction->jenis_barang }}</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Panjang Barang</th>
                            <td>{{ $transaction->panjang }} CM</td>
                        </tr>
                         <tr>
                            <th style="width: 400px">Tinggi Barang</th>
                            <td>{{ $transaction->tinggi }} CM</td>
                        </tr>
                         <tr>
                            <th style="width: 400px">Lebar Barang</th>
                            <td>{{ $transaction->lebar }} CM</td>
                        </tr>
                        <tr>
                            <th style="width: 400px">Berat Barang</th>
                            <td>{{ $transaction->berat_barang }} KG</td>
                        </tr>


                        <tr>
                            <th style="width: 400px">Status</th>
                            @if ($transaction->status == 'DELIVERED')
                            <td>
                                <span class="badge badge-success">DELIVERED</span>
                            </td>
                            @elseif ($transaction->status == 'ON PROGRESS')
                            <td>
                                <span class="badge badge-warning">ON PROGRESS</span>
                            </td>
                            @elseif ($transaction->status == 'PENDING')
                            <td>
                                <span class="badge badge-warning">PENDING</span>
                            </td>
                            @elseif ($transaction->status == 'PERLU DIAMBIL')
                            <td>
                                <span class="badge badge-warning">PERLU DIAMBIL</span>
                            </td>
                            @elseif ($transaction->status == 'SUDAH BAYAR')
                            <td>
                                <span class="badge badge-success">SUDAH BAYAR</span>
                            </td>
                            @else
                            <td>
                                <span class="badge badge-danger">CANCELLED</span>
                            </td>

                            @endif
                        </tr>
                        <tr>
                            <th style="width: 400px">Total Harga</th>
                            <td>Rp{{ number_format($transaction->total_harga) }}</td>
                        </tr>

                    </tbody>
                  </table>

                </div>

              </div>

            @if ($transaction->status == 'ON PROGRESS' || $transaction->status == 'DELIVERED')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Keterangan</h3>
                    <button href=""data-toggle="modal"
                    data-target="#exampleModal" class="btn btn-sm btn-info float-right">(+) Tambah Keterangan</button>
                    <button href=""data-toggle="modal"
                    data-target="#updateStatus" class="btn btn-sm btn-success float-right mr-3">Update Status</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">

                    <table id="table-data"
                        class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $keterangan = json_decode($transaction->keterangan)
                            @endphp
                            @foreach ($keterangan as $val)
                                <tr>
                                    <td>{{ date('Y-m-d H:i:s', strtotime($val->created_at)) ?? ''}}</td>
                                    <td>{{ $val->pesan ?? ''}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{-- {!! $dataTable->table() !!} --}}
                </div>
                <!-- /.card-body -->
            </div>
            @endif
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Keterangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.transaction.add.keterangan') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keterangan</label>
                                <input type="text" class="form-control"
                                    value="{{ old('keterangan') }}" name="keterangan" placeholder="Keterangan" required>
                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="updateStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.transaction.update.status') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keterangan</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Pilih Keterangan</option>
                                    <option value="DELIVERED">DELIVERED</option>
                                    <option value="CANCELLED">CANCELLED</option>
                                </select>
                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
                </form>

            </div>
        </div>
    </div>
@endsection
