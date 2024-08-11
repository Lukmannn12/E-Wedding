<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Katalog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
        <style>
        .navbar {
            justify-content: center;
        }

        .navbar-brand,
        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }

        .nav-item a {
            margin-left: 15px;
            margin-right: 15px;
        }

        .navbar-nav {
            flex-direction: row;
        }

        .dropdown {
            margin-left: auto;
        }

        .btn-login {
            margin-left: 10px;
        }
        .navbar {
            justify-content: center;
        }

        .navbar-brand,
        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }

        .nav-item a {
            margin-left: 15px;
            margin-right: 15px;
        }

        .navbar-nav {
            flex-direction: row;
        }

        .dropdown {
            margin-left: auto;
        }

        .btn-login {
            margin-left: 10px;
        }

        .card-img-top {
            height: 300px; /* tinggi gambar */
            object-fit: cover; /* agar gambar bisa di-crop agar sesuai ukuran */
        }

        .card-footer {
            background-color: #f8f9fa; /* warna latar belakang footer */
        }

        .btn-back {
            color: #ffffff; /* warna teks tombol */
            background-color: #4CAF50; /* warna latar tombol */
            border-color: #4CAF50; /* warna border tombol */
        }

        .btn-back:hover {
            color: #ffffff; /* warna teks tombol saat hover */
            background-color: #45a049; /* warna latar tombol saat hover */
            border-color: #45a049; /* warna border tombol saat hover */
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary m-3" style="padding-left:30px; padding-right:30px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pemesan') ? 'active' : '' }}" href="/pemesan"><strong>Pesan</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kontakkami') ? 'active' : '' }}" href="/kontakkami"><strong>Kontak Kami</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('historypesanan') ? 'active' : '' }}" href="/historypesanan"><strong>History Pesanan</strong></a>
                    </li>
                </ul>
                <div class="d-flex">
                    @if(Auth::check())
                    <div class="dropdown d-inline-block ms-auto">
                        <a class="header-item waves-effect dropdown-toggle" href="#" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration:none; color:black;">
                            <img src="img/user.svg" alt="User Icon" style="margin-right: 10px; width:20px; color: #4CAF50;" />
                            Halo, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="color: #4CAF50;">Keluar</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success me-3 btn-login">Masuk</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-success btn-login">Daftar</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>




    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <img src="{{ asset('storage/' . $data->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title mb-3" style="color:#4CAF50;"> <strong>{{ $data->nama_paket }}</strong></h3>
                        <h5 class="mb-3">Rp. {{ $data->biaya }}</h5>
                        <p class="card-text">{{ $data->isi_katalog }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <a class="btn btn-success btn-back" href="{{ route('katalog') }}" role="button">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS bundle (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>