<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaSchoolPay - Pembayaran Sekolah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/landing.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top custom-navbar shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="landingpage2.html">InstaSchoolPay</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="landing">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#customers">Merchandise</a>
                    </li>
                    <!-- Tombol Logout -->
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white logout-btn" href="/login">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center text-white">
        <div class="container">
            <h1 class="display-4">Inovasi Pembayaran Sekolah Berbasis Web yang Cerdas</h1>
            <p class="lead">Kelola transaksi keuangan sekolah Anda dengan cepat, mudah, dan aman bersama InstaSchoolPay.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-light btn-lg">Jadwalkan Demo</a>
                <a href="#" class="btn btn-primary btn-lg">Mulai dalam 3 Menit</a>
            </div>
        </div>
    </header>

    <!-- Section Modular Solutions -->
    <section class="modular-solutions py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Solusi Terintegrasi untuk Kebutuhan Pembayaran Sekolah Anda</h2>
            <p class="mb-5">
                Kurangi biaya, tingkatkan efisiensi, dan kelola operasional pembayaran secara terintegrasi. 
                InstaSchoolPay membantu Anda mempermudah semua kebutuhan pembayaran sekolah, mengelola operasi keuangan, dan menghadirkan inovasi baru.
            </p>

            <!-- Features Grid -->
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="feature-card shadow p-4 rounded bg-white">
                        <div class="feature-icon mb-3" style="font-size: 2rem; color: #20c997;">🖥️</div>
                        <h5>Dashboard</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card shadow p-4 rounded bg-white">
                        <div class="feature-icon mb-3" style="font-size: 2rem; color: #007BFF;">💳</div>
                        <h5>Pembayaran</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card shadow p-4 rounded bg-white">
                        <div class="feature-icon mb-3" style="font-size: 2rem; color: #6f42c1;">🧢</div>
                        <h5>Merchandise</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card shadow p-4 rounded bg-white">
                        <div class="feature-icon mb-3" style="font-size: 2rem; color: #dc3545;">📊</div>
                        <h5>Laporan Keuangan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer text-white pt-4" id="footer">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <h5 class="mb-3">InstaSchoolPay</h5>
                    <p class="mb-2">
                        Terima kasih telah menggunakan layanan kami. Semua hak cipta dilindungi oleh InstaSchoolPay Team &copy; 2024.
                    </p>
                    <p>
                        <strong>Email:</strong> support@instaschoolpay.com <br>
                        <strong>Telp:</strong> +62 811 9876 5432
                    </p>
                </div>
                <!-- Right Column -->
                <div class="col-md-6 text-md-end">
                    <h5 class="mb-3">Ikuti Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="https://www.instagram.com" class="text-decoration-none text-white d-flex align-items-center">
                                <i class="bi bi-instagram me-2"></i> @instaschoolpay
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://www.facebook.com" class="text-decoration-none text-white d-flex align-items-center">
                                <i class="bi bi-facebook me-2"></i> @InstaSchoolPayID
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="mailto:support@instaschoolpay.com" class="text-decoration-none text-white d-flex align-items-center">
                                <i class="bi bi-envelope-fill me-2"></i> support@instaschoolpay.com
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://www.youtube.com" class="text-decoration-none text-white d-flex align-items-center">
                                <i class="bi bi-youtube me-2"></i> InstaSchoolPay Channel
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com" class="text-decoration-none text-white d-flex align-items-center">
                                <i class="bi bi-linkedin me-2"></i> InstaSchoolPay Corporation
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="bg-white my-4">
            <p class="text-center mb-0">&copy; 2024 InstaSchoolPay. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
