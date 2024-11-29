<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <img src="img/logoapp.png" alt="InstaSchoolPay Logo" class="logo">
        <a class="navbar-brand" href="/dashboard">InstaSchoolPay</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-button" href="dapodik.html">Dapodik Sekolah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-button" href="rapor.html">Rapor Pendidikan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-button" href="pembayaran.html">Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-button logout-button" href="/login">Log Out</a>
                </li>                    
            </ul>                
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer text-white pt-4">
    <div class="container">
        <div class="row">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
                <h5 class="mb-3">InstaSchoolPay</h5>
                <p class="mb-2">InstaSchoolPay - Solusi terbaik untuk manajemen keuangan sekolah. Semua hak cipta dilindungi © 2024.</p>
                <p>
                    <strong>Email:</strong> support@instaschoolpay.com <br>
                    <strong>Telp:</strong> +62 812 3456 7890
                </p>
            </div>
            <!-- Kolom Kanan -->
            <div class="col-md-6 text-md-end">
                <h5 class="mb-3">Ikuti Kami</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#" class="text-decoration-none text-white d-flex align-items-center">
                            <i class="bi bi-instagram me-2"></i> @instaschoolpay
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-decoration-none text-white d-flex align-items-center">
                            <i class="bi bi-facebook me-2"></i> @instaschoolpay_official
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-decoration-none text-white d-flex align-items-center">
                            <i class="bi bi-envelope-fill me-2"></i> info@instaschoolpay.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="bg-white my-4">
        <p class="text-center mb-0">&copy; 2024 InstaSchoolPay. All Rights Reserved.</p>
    </div>
</footer>