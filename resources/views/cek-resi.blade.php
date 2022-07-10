@extends('layouts.frontend')


@section('title', 'Dunia Parcel | Jasa Ekspedisi')
@section('content')

    <div class="main-features">
        <div class="container px-mobile-fix">
            <div class="section-header py-lg-3 text-lg-center">
                <div class="mx-lg-8">
                    <div class="mx-lg-8">
                        <h3 class="h3 my-5">Pelacakan Nomor Paket #{{ $transaction->no_resi }}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="h3">Informasi Pengiriman</h3>
                    <table class="table table-bordered">

                        <tbody>
                            <tr>
                                <th style="width: 100px">No Resi</th>
                                <th style="width: 5px">:</th>
                                <td style="width: 100px">#{{ $transaction->no_resi }}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px">Status</th>
                                <th style="width: 5px">:</th>
                                <td style="width: 100px">{{ $transaction->status }}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px">Nama Penerima</th>
                                <th style="width: 5px">:</th>
                                <td style="width: 100px">{{ $transaction->nama_penerima }}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px">Kota</th>
                                <th style="width: 5px">:</th>
                                <td style="width: 100px">{{ $transaction->kota }}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px">Kecamatan</th>
                                <th style="width: 5px">:</th>
                                <td style="width: 100px">{{ $transaction->kecamatan }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h3 class="h3">Track Paket</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                        <tbody>
                            @php
                                $keterangan = json_decode($transaction->keterangan);
                            @endphp
                            @foreach ($keterangan as $val)
                                <tr>
                                    <td>{{ date('Y-m-d H:i:s', strtotime($val->created_at)) ?? '' }}</td>
                                    <td>{{ $val->pesan ?? '' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
