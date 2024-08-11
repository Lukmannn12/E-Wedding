@extends('layout.nav')

@section('home')


<div class="mt-4 mb-4" >
        <h1 class="text-center" style="margin-top: 50px; font-family:'Poppins',sans-serif; font-weight: bolder;">Cek Data Pemesanan Anda</h1>
    </div>
                  <div class="container mt-4">
                    <form action="{{ route('search') }}" method="GET" class="search-form">
                      <div class="search text-center" style="margin-bottom: 40px; margin-top:40px;">
                          <input placeholder="Cari data" type="text" name="q">
                          <button type="submit">Cari</button>
                        </div>                
                    </form>


<section class="content-header">
    <div class="container-fluid" style="margin-top: 20px; margin-bottom:20px">
        <div class="container-fluid" style="text-align:center;">
            <h1 class="text-bold" style="font-weight:bold;">Data Pesanan</h1>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid table-responsive" style="padding-right: 50px; padding-left:50px;">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center" style="text-align:center;">
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th>Paket Katalog</th>
                            <th>Tanggal Dibuat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                        @endphp
                        @foreach ($data as $row )
                        <tr style="text-align:center;">
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->tgl_acara}}</td>
                            <td>{{ $row -> katalog->nama_paket }}</td>
                            <td>{{ $row->created_at->format('D M Y') }}</td>
                            <td>
                                @if ($row->status == 'request')
                                    <button class="btn btn-warning">{{ $row->status }}</button>
                                @elseif ($row->status == 'approved')
                                    <button class="btn btn-success">{{ $row->status }}</button>
                                @elseif ($row->status == 'rejected')
                                    <button class="btn btn-danger">{{ $row->status }}</button>
                                @else
                                    <button class="btn btn-secondary">{{ $row->status }}</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


@endsection