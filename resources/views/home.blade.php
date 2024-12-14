<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Aplikasi Premium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
        }
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to right, #4e54c8, #8f94fb);
        }
        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }
        .nav-link {
            color: white !important;
        }
        .hero-section {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            padding: 100px 0;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            animation: fadeInDown 1.5s;
        }
        .hero-section p {
            animation: fadeInUp 1.5s;
        }
        .features-section {
            padding: 60px 0;
            background-color: #fff;
        }
        .features-section .icon-box {
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }
        .features-section .icon-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .testimonials {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 60px 0;
        }
        .call-to-action {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 50px 0;
        }
        .faq-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }
        footer {
            background: #333;
            color: white;
            padding: 20px 0;
        }
        footer p {
            margin: 0;
        }
        .btn:hover {
            background-color: #2575fc;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .contact-section {
            background-color: #f4f4f4;
            padding: 60px 0;
        }
        .contact-form input, .contact-form textarea {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Aplikasi Premium</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center">
        <div class="container">
            <h1>Selamat Datang di Aplikasi Premium</h1>
            <p class="lead">Nikmati layanan aplikasi terbaik untuk mendukung kebutuhan Anda</p>
            <a href="index" class="btn btn-outline-light btn-lg">Jelajahi Layanan Kami</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <h2 class="text-center mb-5">Kenapa Memilih Kami?</h2>
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <div class="icon-box">
                        <i class="fas fa-bolt fa-3x text-primary"></i>
                        <h5 class="mt-3">Cepat dan Efisien</h5>
                        <p>Semua aplikasi kami dirancang untuk memberikan performa terbaik tanpa kompromi.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon-box">
                        <i class="fas fa-shield-alt fa-3x text-primary"></i>
                        <h5 class="mt-3">Keamanan Tinggi</h5>
                        <p>Sistem keamanan canggih untuk melindungi data dan privasi Anda.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon-box">
                        <i class="fas fa-headset fa-3x text-primary"></i>
                        <h5 class="mt-3">Dukungan Pelanggan</h5>
                        <p>Tim kami selalu siap membantu Anda kapan saja dibutuhkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials text-center">
        <div class="container">
            <h2 class="mb-5">Apa Kata Pelanggan?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"Layanan ini sangat membantu, saya sangat puas dengan kinerjanya!"</p>
                        <h6>- John Doe</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"Keamanan terbaik yang pernah saya gunakan. Sangat direkomendasikan."</p>
                        <h6>- Jane Smith</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"Dukungan pelanggan yang sangat responsif dan ramah!"</p>
                        <h6>- Michael Lee</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="text-center mb-5">Hubungi Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="contact-form">
                        <input type="text" placeholder="Nama Anda" required>
                        <input type="email" placeholder="Email Anda" required>
                        <textarea rows="5" placeholder="Pesan Anda" required></textarea>
                        <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2024 Aplikasi Premium. All Rights Reserved.</p
