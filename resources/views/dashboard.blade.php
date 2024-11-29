<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/master.css">
    <title>Document</title>
</head>
<body>
    @extends('master')

    @section('content')
    <br>
    <!-- CONTAINER UTAMA -->
    <div class="container">
        <!-- Judul Halaman -->
        <h2 class="section-title">Dashboard InstaSchoolPay</h2>
        <div class="card shadow-lg my-4">
            <div class="card-body">
                <h5 class="card-title text-center">Selamat Datang di Halaman Dashboard InstaSchoolPay</h5>
                <hr>
                <p>Selamat Datang di Halaman Dashboard InstaSchoolPay</p>
                <p>Kami Menawarkan Solusi Pembayaran Cepat & Tanggap</p>
            </div>
        </div>
        <br>
        <!-- Diagram Laporan Keuangan -->
        <div class="chart-container">
            <h3 class="chart-title">Diagram Laporan Keuangan</h3>
            <canvas id="financialChart"></canvas>
        </div>
        <br>
        <!-- Grid untuk kartu -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <div class="card-body">
                        <i class="card-icon bi bi-cash-coin"></i>
                        <h5 class="card-title mt-3">Pembayaran Tagihan Sekolah</h5>
                        <p class="card-text">Bayar berbagai tagihan sekolah seperti SPP, uang buku, dan kegiatan dengan mudah.</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <div class="card-body">
                        <i class="card-icon bi bi-bell"></i>
                        <h5 class="card-title mt-3">Notifikasi Pembayaran</h5>
                        <p class="card-text">Dapatkan pengingat otomatis untuk pembayaran yang akan datang atau jatuh tempo.</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <div class="card-body">
                        <i class="card-icon bi bi-card-list"></i>
                        <h5 class="card-title mt-3">Riwayat Transaksi</h5>
                        <p class="card-text">Akses semua catatan pembayaran kapan saja untuk memantau keuangan.</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mengubah warna navbar saat scroll
        window.addEventListener("scroll", function () {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

        // SweetAlert untuk Log Out
        document.getElementById('logout-button').addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah aksi default

            Swal.fire({
                title: 'Apakah Anda yakin ingin keluar?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, keluar!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'login.html'; // Arahkan ke halaman login
                }
            });
        });
        // Data untuk diagram keuangan
        const ctx = document.getElementById('financialChart').getContext('2d');
        const financialChart = new Chart(ctx, {
            type: 'bar', // Tipe chart
            data: {
                labels: ['SPP', 'Uang Buku', 'Kegiatan', 'Donasi'], // Kategori
                datasets: [{
                    label: 'Pendapatan (dalam juta)',
                    data: [30, 20, 15, 10], // Data keuangan
                    backgroundColor: [
                        '#007bff', '#6c757d', '#17a2b8', '#28a745'
                    ],
                    borderColor: [
                        '#0056b3', '#4e4e4e', '#117a8b', '#206a34'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    @endsection
</body>
</html>