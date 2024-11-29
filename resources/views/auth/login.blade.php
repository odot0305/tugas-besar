<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="blur-container">
        <!-- Logo -->
        <img src="img/logoapp.png" alt="InstaSchoolPay Logo" class="logo">
        <div class="welcome-text">Selamat Datang di InstaSchoolPay</div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                {{-- <form id="loginForm" action="dashboard.html" method="POST">
                    <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    <button type="button" class="btn btn-login" id="loginBtn">Login</button>
                </form> --}}
                <a href="/regristrasi">
                    <button class="btn btn-register">Belum Punya Akun? Daftar</button>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script>
        document.getElementById('loginBtn').addEventListener('click', function () {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (email === '' || password === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Login Gagal',
                    text: 'Harap isi semua kolom.',
                });
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Login Berhasil',
                    text: 'Selamat Datang di InstaSchoolPay!',
                    confirmButtonText: 'Lanjutkan'
                }).then(() => {
                    document.getElementById('loginForm').submit();
                });
            }
        });
    </script> --}}
</body>
</html>