@extends('layout.nav')

@section('home')

<section class="image-banner mt-4">
    <div class="container text-center">
        <div style="max-width: 100%;">
        <img src="img/wed.png" class="img-banner-fluid img-fluid animate__animated animate__zoomIn" 
                alt="Gambar Wedding" style="max-width: 100%; height: 500px; object-fit: cover; 
                animation-duration: 1s; animation-delay: 0.5s;">
        </div>
    </div>
</section>

<!-- Section Visi dan Misi -->
<section class="container-fluid py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h1 class="text-center mb-4 animate__animated animate__fadeInUp" style="color:green"><strong>Visi Kami</strong></h1>
        <p style="text-align: justify;" class="animate__animated animate__fadeInUp">
            Visi kami adalah menjadi mitra terpercaya yang dapat diandalkan oleh setiap pasangan dalam perjalanan menuju hari pernikahan mereka. Kami percaya bahwa setiap pernikahan adalah cerita unik yang patut dirayakan dengan penuh sukacita dan keindahan.
        </p>
        <h1 class="text-center mt-5 mb-4 animate__animated animate__fadeInDown" style="color:green"><strong>Misi Kami</strong></h1>
        <p style="text-align: justify;" class="animate__animated animate__fadeInDown">
            Misi kami adalah menyediakan layanan dan produk berkualitas tinggi yang mencakup semua aspek pernikahan, dari perencanaan awal hingga hari besar Anda. Kami berusaha untuk selalu menghadirkan inovasi dan solusi terbaik yang dapat disesuaikan dengan kebutuhan dan keinginan setiap pasangan.
        </p>
    </div>
</section>


<section class="container-fluid" style="padding-top: 30px; padding-bottom: 30px;">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <img src="img/wed.png" class="img-fluid" alt="...">
            </div>
            <div class="col-sm-6 col-md-5 col-lg-6 offset-lg-0 pt-5">
                <div class="container-fluid">
                    <h1 style="text-align: justify; color:green;"><strong>Tentang Kami</strong></h1>
                    <p style="text-align: justify;">Selamat datang di JeWePe WEDDING, platform terbaik yang menghadirkan solusi pernikahan impian Anda. 
                        Kami adalah tim profesional yang berkomitmen untuk membantu setiap pasangan dalam mewujudkan pernikahan yang sempurna dan penuh kenangan indah.</p>
                </div>
                <div class="container-fluid">
                    @php
                    if (empty($data)) {
                    dd("Variabel \$data kosong atau tidak terdefinisi!");
                    }
                    @endphp
                    @foreach ($data as $row)
                    <div style="margin-top: 30px;">
                        <h1 style="text-align: justify; color:green;"><strong>Kontak Kami</strong></h1>
                        <p style="text-align: justify;">
                            <strong><i class="fas fa-map-marker-alt"></i> Alamat:</strong> Jln. Tubagus<br>
                            <strong><i class="fas fa-phone-alt"></i> No. Telepon:</strong> {{ $row->no_telp }}<br>
                            <strong><i class="fas fa-envelope"></i> Email:</strong> {{ $row->email }}<br>
                            <strong><i class="fab fa-instagram"></i> Instagram:</strong> {{ $row->instagram }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid p-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1067950717734!2d106.82807617554879!3d-6.380214162409527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1718288180200!5m2!1sid!2sid" style="border:0; width: 100%; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection


