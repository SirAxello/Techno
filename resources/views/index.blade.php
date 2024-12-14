<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Layanan dan Aktivasi Software</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f6f9; /* Latar belakang yang lebih terang dan segar */
            color: #2f2f2f; /* Warna teks yang lebih gelap untuk kemudahan membaca */
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background: rgba(0, 68, 204, 0.8); /* Transparansi dengan latar belakang biru */
            backdrop-filter: blur(10px); /* Efek blur pada navbar */
            padding: 0.4rem 1rem; /* Padding navbar lebih kecil */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Efek bayangan */
        }

        .navbar-brand {
            color: #fff;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .navbar-nav .nav-item .nav-link {
            color: #fff;
            font-size: 1rem;
            padding: 0.3rem 0.8rem;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #ffcc00; /* Warna hover untuk tombol */
        }

        .d-flex a {
            font-size: 1rem;
            padding: 0.3rem 0.8rem;
        }

        /* Bagian Konten */
        .container {
            margin-top: 80px;
        }

        /* Gaya Card */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            background-color: #fff;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2); /* Efek bayangan lebih kuat */
        }

        .card-img-container {
            position: relative;
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 50%;
            margin: 0 auto;
            transition: transform 0.3s ease;
        }

        .card-img-container:hover {
            transform: scale(1.1); /* Efek zoom pada gambar */
        }

        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card-img-top:hover {
            transform: scale(1.1);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2f2f2f;
        }

        .card-text {
            font-size: 1rem;
            color: #777;
        }

        .card-body {
            padding: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Memusatkan teks secara vertikal */
            align-items: center; /* Memusatkan teks secara horizontal */
            text-align: center;
            transition: background-color 0.3s ease-in-out;
        }

        .card-body:hover {
            background-color: #f7f7f7; /* Efek hover pada body card */
        }

        .section-heading {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: #0044cc;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .section-heading:hover {
            transform: scale(1.05);
        }

        footer {
            background: linear-gradient(135deg, #0044cc, #0066ff); /* Gradasi biru */
            color: white;
            text-align: center;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-scroll-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #0044cc;
            color: white;
            border-radius: 50%;
            padding: 15px;
            font-size: 1.5rem;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            display: none;
        }

        .btn-scroll-top:hover {
            background-color: #0066ff; /* Biru sedikit lebih terang untuk efek hover */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">
                App Premium
            </a>
            <div class="d-flex">
                <a href="{{ route('home') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </nav>

    <!-- Bagian Konten -->
    <div id="services" class="container mt-4">
        <h2 class="section-heading">Pilihan Layanan dan Aktivasi Software</h2>

        <!-- Layanan Premium -->
        <h3 class="text-center mb-4">Layanan Premium</h3>
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 text-center">
                    <div class="card-img-container">
                        <img src="{{ asset('images/' . $service['image']) }}" class="card-img-top" alt="{{ $service['name'] }}"/>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $service['name'] }}</h5>
                        <p class="card-text">{{ $service['description'] }}</p>
                        <p class="card-text fw-bold">{{ $service['price'] }}</p>
                        <!-- Tombol Langganan dengan pesan ke WhatsApp -->
                        <a href="https://wa.me/6282226840200?text=Saya%20ingin%20berlangganan%20{{ urlencode($service['name']) }}%20dengan%20harga%20{{ urlencode($service['price']) }}.%20Mohon%20informasi%20lebih%20lanjut." class="btn btn-primary w-100">Langganan</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <hr class="my-5">

        <!-- Aktivasi Software -->
        <h3 class="text-center mb-4">Aktivasi Software</h3>
        <div class="row g-4">
            @foreach($softwares as $software)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-container">
                        <img src="{{ asset('images/' . $software['image']) }}" class="card-img-top" alt="{{ $software['name'] }}"/>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $software['name'] }}</h5>
                        <p class="card-text">{{ $software['description'] }}</p>
                        <p class="card-text fw-bold">{{ $software['price'] }}</p>
                        <!-- Tombol Aktivasi dengan pesan ke WhatsApp -->
                        <a href="https://wa.me/6282226840200?text=Saya%20ingin%20mengaktifkan%20{{ urlencode($software['name']) }}%20dengan%20harga%20{{ urlencode($software['price']) }}.%20Mohon%20bantuan%20untuk%20aktivasi." class="btn btn-primary w-100">Aktivasi</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Tombol Scroll to top -->
    <button class="btn-scroll-top" id="scrollToTopBtn">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Footer -->
    <footer>
        &copy; 2024 App Premium. All Rights Reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Menampilkan tombol scroll ke atas saat menggulir
        window.onscroll = function() {
            let scrollButton = document.getElementById("scrollToTopBtn");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollButton.style.display = "block";
            } else {
                scrollButton.style.display = "none";
            }
        };

        // Scroll ke atas saat tombol diklik
        document.getElementById("scrollToTopBtn").onclick = function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        };
    </script>
</body>
</html
