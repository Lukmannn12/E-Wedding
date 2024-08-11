<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WO JeWePe</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/wo-logo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary m-3" style="padding-left:30px; padding-right:30px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" style="padding-left:50px">
                <img src="img/logo.jpg" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
            </a>
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


    <!-- Main content -->
    <div class="main-content">
        <main>@yield('home')</main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <footer>
        <p><strong>&copy; 2024 WO JeWePe</strong></p>
    </footer>
</body>

</html>