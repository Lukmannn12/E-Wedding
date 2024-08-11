<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .container {
            margin-right: 550px;
            margin-top: 200px;
            margin-left: 550px;
            margin-bottom: 200px;
            padding: 2rem;
            background: #fff;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border-radius: 0.25rem;
        }

        .container h2 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .form-group label {
            font-weight: 600;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Daftar Akun</h2>
        <div class="card" style="padding: 30px;">
                <p class="login-box-msg text-center mb-5" style="font-size: 15px;">Masukkan Data Anda</p>
            <form action="{{ route('registeruser')}}" method="post" class="form-login">
            @csrf
            <div class="form-group">
                    <label for="text">Username</label>
                    <input type="text" class="form-control"  placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="dbcadb@gmail.com" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password">
                </div>
                <div class="row">
            <div class="col-4 text-center">
              <button type="submit" class="btn btn-primary btn-block" style="background-color: rgb(251, 153, 16); border:none;">Daftar</button>
            </div>
          </div>
          <p class="mb-0" style="margin-top: 20px;">
            Sudah Punya Akun? <a href="/login" class="text-center">&nbsp;Login</a>
          </p>
            </form>
        </div>
    </div>
</body>

</html>