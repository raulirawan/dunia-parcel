@extends('layouts.dashboard-admin')

@section('title', 'Halaman Transaksi Masuk')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Transaksi Masuk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Transaksi Masuk</li>
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
                                <h3 class="card-title">Data Transaksi Masuk</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body table-responsive">

                                <table id="example1"
                                    class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%">Tanggal Transaksi</th>
                                            <th style="width: 5%">Kode Transaksi</th>
                                            <th>Username</th>
                                            <th>Jenis Paket</th>
                                            <th>Nama Penerima</th>
                                            <th>Status</th>
                                            <th>Total Harga</th>
                                            <th style="width: 15%">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaksi as $item)
                                            <tr>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->kode_transaksi }}</td>
                                                <td>{{ $item->user->username ?? 'Tidak Ada' }}</td>
                                                <td>{{ $item->paket->nama_paket }}</td>
                                                <td>{{ $item->nama_penerima }}</td>
                                                <td>
                                                    @if ($item->status == 'SUDAH BAYAR')
                                                        <span class="badge bg-success">
                                                            SUDAH BAYAR
                                                        </span>
                                                    @else
                                                        <span class="badge bg-warning">
                                                                PENDING
                                                        </span>
                                                    @endif
                                                </td>
                                                <td>{{ number_format($item->total_harga) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.transaction.detail', $item->id) }}" class="btn-sm btn-info">Detail</a>
                                                    @if ($item->status == 'SUDAH BAYAR')
                                                        <a href="{{ route('admin.transaction.accept', $item->id) }}" onclick="return confirm('Yakin ?')" class="btn-success btn-sm"> Terima</a>
                                                        <a href="{{ route('admin.transaction.reject', $item->id) }}" onclick="return confirm('Yakin ?')" class="btn-danger btn-sm"> Tolak</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                                {{-- {!! $dataTable->table() !!} --}}
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
@endsection
@push('down-style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush
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
