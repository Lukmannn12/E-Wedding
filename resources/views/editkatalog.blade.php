@extends('layout.admin')

@section('content')
<div class="page-content p-1" style="font-family: 'Poppins', sans-serif;">
    <div class="container-fluid">
        <div class="container">
            <h2 style="font-size: 36px; font-weight:bolder; margin-top: 50px; text-align:center;">Edit Katalog</h2>
            <form action="{{ route('updatekatalog', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_paket" class="form-label">Nama Paket</label>
                    <input type="text" name="nama_paket" id="nama_paket" value="{{ $data->nama_paket }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="biaya" class="form-label">Biaya</label>
                    <input type="text" name="biaya" id="biaya" value="{{ $data->biaya }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="isi_katalog" class="form-label">Isi Katalog</label>
                    <textarea name="isi_katalog" id="isi_katalog" class="form-control" rows="5">{{ $data->isi_katalog }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>
                <div style="margin-top: 10px;">
                    <label class="form-label">Gambar Saat Ini</label><br>
                    <img src="{{ asset('storage/' . $data->gambar) }}" style="max-width: 100px;">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Simpan</button>
                <a href="{{ route('tabelkatalog') }}" class="btn btn-danger" style="margin-top: 20px;">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection