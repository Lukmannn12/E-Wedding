@extends('layout.nav')

@section('home')

<div class="container" style="margin-top:100px; margin-bottom:200px;">
    <div class="background-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Form Pemesanan</div>
                    <div class="card-body">
                        <form action="{{ route('simpandata')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mt-3">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                                <div class="col-md-8">
                                    <input  type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required autofocus>
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="tgl_acara" class="col-md-4 col-form-label text-md-right">Tanggal Acara</label>
                                <div class="col-md-8">
                                    <input  type="date" class="form-control @error('tgl_acara') is-invalid @enderror" name="tgl_acara" required>
                                    @error('tgl_acara')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="katalog_id" class="col-md-4 col-form-label text-md-right">Paket</label>
                                <div class="col-md-8">
                                    <select class="form-select mb-3" name="katalog_id">
                                        <option selected>Pilih Paket</option>
                                        @foreach ($data as $katalog)
                                        <option value="{{ $katalog->id }}">{{ $katalog->nama_paket }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-0 mt-3">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
