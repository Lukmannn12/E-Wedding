@extends('layout.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid" style="margin-top: 20px; margin-bottom:20px">
        <div class="container-fluid" style="text-align:center;">
            <h1 class="text-bold" style="font-weight:bold;">Data Katalog</h1>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid table-responsive" style="padding-right: 50px; padding-left:50px;">
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <a href="{{route('tambahkatalog')}}" class="btn btn-primary " data-toggle="modal" data-target="#tambahModal">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center" style="text-align:center;">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Paket</th>
                            <th>Isi Katalog</th>
                            <th>Biaya</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                        @endphp
                        @foreach ($data as $row )
                        <tr style="text-align:center;">
                            <th scope="row">{{ $no++ }}</th>
                            <td><img src="{{ 'storage/' . $row->gambar }}" width="100" ></td>
                            <td>{{$row->nama_paket}}</td>
                            <td>{{$row->isi_katalog}}</td>
                            <td>{{$row->biaya}}</td>
                            <td>{{ $row->created_at->format('D M Y') }}</td>

                            <td>
                            <a href="/editkatalog/{{ $row->id }}" class="btn btn-info">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                <button class="btn btn-danger delete-confirm" data-id="{{ $row->id }}">
                                    <i class="fa fa-trash"></i> Delete
                                </button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@include('modal.katalog')

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-confirm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const id = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Anda akan menghapus data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '/deletekatalog/' + id;
                    }
                })
            });
        });
    });
</script>