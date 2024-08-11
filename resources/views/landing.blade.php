@extends ('layout.nav')

@section('home')

<section id="hero" class="container-fluid animate__animated animate__fadeIn animate_slow" style=" animation-duration: 2s; animation-delay: 0.5s;">
    <div class="row" style="padding-top:80px">
        <div id="hero-greeting" class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="container-fluid hero-content" style="margin: 0 40px;">
                <h1 class="hero1" style="color: #4CAF50;">Wedding Organizer JeWePe</h1>
                <p style="padding-top: 20px;">Kami mengundang Anda untuk merasakan keajaiban sebuah pernikahan yang tak terlupakan, dipersembahkan dengan cinta dan dedikasi untuk setiap momen spesial dalam hidup Anda.</p>
            </div>
        </div>
        <div id="hero-img" class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="img/wed.png" class="img-fluid hero-img" alt="Gambar Katalog" style="max-width: 80%; height: auto;" />
        </div>
    </div>
</section>




<section class="container-fluid animate__animated animate__zoomIn" style="padding: 100px 100px; animation-duration: 4s; animation-delay: 1s;">
    <div class="row" style="margin-bottom: 30px;">
        <p style="font-weight: bold; font-size: 30px; color: #4CAF50; text-transform: uppercase; letter-spacing: 1px;">&nbsp; Katalog</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @php
            if (empty($data)) {
            dd("Variabel \$data kosong atau tidak terdefinisi!");
            }
            @endphp
            @foreach ($data as $row)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $row->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title mb-3" style="color:#4CAF50;"> <strong>{{ $row->nama_paket }}</strong></h3>
                        <h5 class="mb-3">Rp. {{ $row->biaya }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($row->isi_katalog, 100) }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <a class="btn btn-success" href="{{ route('detailkatalog', $row->id) }}" role="button">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>




@endsection