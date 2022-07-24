@extends('layouts.dashboard-admin')

@section('title', 'Halaman Paket')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Paket</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Paket</li>
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
                                <h3 class="card-title">Data Paket Perlu di Ambil</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Tanggal Transaksi</th>
                                                <th>Kode Transaksi</th>
                                                <th>Nomor Resi</th>
                                                <th>Nama Pengirim</th>
                                                <th>Alamat Pengambilan</th>
                                                <th>Nama Penerima</th>
                                                <th>Alamat Pengiriman</th>
                                                <th style="width: 15%">Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($transaction as $item)
                                                <tr>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>{{ $item->kode_transaksi }}</td>
                                                    <td>{{ $item->no_resi }}</td>
                                                    <td>{{ $item->nama_pengirim }}</td>
                                                    <td>{{ $item->alamat_pengirim }}</td>
                                                    <td>{{ $item->nama_penerima }}</td>
                                                    <td>{{ $item->alamat_penerima }}</td>
                                                    <td>
                                                        <a href="{{ route('petugas.paket.pick.up.index', $item->id) }}"
                                                            class="btn btn-sm btn-primary"onclick="return confirm('Ambil Barang ?')">Ambil
                                                            Barang</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
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

    <!-- Modal Create -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Paket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.paket.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Paket</label>
                                <input type="text" class="form-control"
                                    value="{{ old('nama_paket') }}" name="nama_paket" placeholder="Nama Paket" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga Paket / KG</label>
                                <input type="number" class="form-control"
                                    value="{{ old('harga') }}" name="harga" placeholder="Harga Paket" required>
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
    </div> --}}


    <!-- Modal Edit -->
    {{-- <div class="modal fade modal-edit" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Paket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="form-edit" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Paket</label>
                                <input type="text" class="form-control"
                                    value="" id="nama_paket" name="nama_paket" placeholder="Nama Paket" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga Paket / KG</label>
                                <input type="number" class="form-control"
                                    value="" id="harga" name="harga" placeholder="Harga Paket" required>
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
    </div> --}}



@endsection

@push('down-script')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
