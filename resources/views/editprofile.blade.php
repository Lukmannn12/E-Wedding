@extends('layout.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid" style="margin-top: 20px; margin-bottom:20px">
        <div class="container-fluid" style="text-align:center;">
            <h1 class="text-bold" style="font-weight:bold;">Edit Profile</h1>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid table-responsive" style="padding-right: 100px; padding-left:100px;">
        <div class="card">
            <div class="container-fuid" style="padding-left:100px; padding-right:100px; padding-top:10px;">
            <div class="card-body">
                <form action="{{ route('updateprofile', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" id="judul" value="{{ $data->judul }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ $data->email }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No Telp</label>
                        <input type="text" name="no_telp" id="no_telp" value="{{ $data->no_telp }}" class="form-control" ></>
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" name="instagram" id="instagram" value="{{ $data->instagram }}" class="form-control" ></>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                    </div>
                    <div style="margin-top: 10px;">
                        <label class="form-label">Gambar Saat Ini</label><br>
                        <img src="{{ asset('storage/' . $data->logo) }}" style="max-width: 100px;">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Simpan</button>
                    <a href="{{ route('tabelprofile') }}" class="btn btn-danger" style="margin-top: 20px;">Batal</a>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>



@endsection