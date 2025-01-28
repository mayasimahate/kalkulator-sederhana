<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | Kalkulator Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f2f2f2;
        /* Abu-abu terang */
        margin: 0;
        padding: 0;
        color: #333;
    }

    .hero {
        background: linear-gradient(135deg, #6c6c6c, #a8a8a8);
        /* Gradasi abu-abu */
        color: white;
        padding: 80px 20px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero h1 {
        font-weight: 700;
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 1.25rem;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .hero .btn {
        background-color: white;
        color: #6c6c6c;
        /* Abu-abu */
        font-weight: bold;
        border: none;
        padding: 10px 30px;
        border-radius: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .hero .btn:hover {
        background-color: #e6e6e6;
        /* Abu-abu lebih terang */
    }

    .hero {
        background-image: url('img/kalkulator.jpg');
        /* Ganti dengan path gambar Anda */
        background-size: cover;
        /* Memastikan gambar menutupi seluruh area */
        background-position: center;
        /* Menempatkan gambar di tengah */
        background-repeat: no-repeat;
        /* Tidak mengulangi gambar */
        color: white;
        /* Warna teks tetap putih agar terlihat jelas */
        padding: 80px 20px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero {
        position: relative;
        /* Pastikan elemen hero menjadi parent untuk overlay */
        background-image: url('img/kalkulator.jpg');
        /* Ganti dengan path gambar Anda */
        background-size: cover;
        /* Memastikan gambar menutupi seluruh area */
        background-position: center;
        /* Menempatkan gambar di tengah */
        background-repeat: no-repeat;
        /* Tidak mengulangi gambar */
        color: white;
        /* Warna teks tetap putih agar terlihat jelas */
        padding: 80px 20px;
        text-align: center;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Warna overlay hitam dengan transparansi */
        z-index: 1;
        /* Menempatkan overlay di bawah teks */
    }

    .hero .container {
        position: relative;
        z-index: 2;
        /* Memastikan teks berada di atas overlay */
    }



    .features,
    .developers,
    .purpose {
        padding: 60px 20px;
    }

    .features h2,
    .developers h2,
    .purpose h2 {
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 40px;
        color: #6c6c6c;
        /* Abu-abu */
    }

    .features .card,
    .developers .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .features .card:hover,
    .developers .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .features .card-title {
        font-weight: 600;
        font-size: 1.2rem;
    }

    .purpose p {
        font-size: 1.1rem;
        line-height: 1.8;
        text-align: justify;
        color: #555;
        /* Abu-abu gelap */
    }

    footer {
        background-color: #6c6c6c;
        /* Abu-abu */
        color: white;
        text-align: center;
        padding: 20px 10px;
        margin-top: 50px;
    }

    footer a {
        color: white;
        text-decoration: underline;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1rem;
        }

        .features .card-title {
            font-size: 1rem;
        }
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Selamat Datang di Kalkulator Sederhana</h1>
            <p>
                Kalkulator yang dirancang untuk membantu perhitungan sehari-hari dengan cepat, mudah, dan akurat.
            </p>
            <a href="kalkulator.php" class="btn">Coba Kalkulator</a>
        </div>
    </section>


    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2>Fitur-Fitur Unggulan</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card text-center p-4">
                        <h5 class="card-title">Penjumlahan</h5>
                        <p class="card-text">Menghitung total dari dua bilangan dengan mudah.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center p-4">
                        <h5 class="card-title">Pengurangan</h5>
                        <p class="card-text">Mengurangi bilangan kedua dari bilangan pertama.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center p-4">
                        <h5 class="card-title">Perkalian</h5>
                        <p class="card-text">Mengalikan dua bilangan dengan hasil yang cepat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center p-4">
                        <h5 class="card-title">Pembagian</h5>
                        <p class="card-text">Membagi bilangan pertama dengan bilangan kedua secara instan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center p-4">
                        <h5 class="card-title">User-Friendly</h5>
                        <p class="card-text">Antarmuka yang sederhana dan mudah digunakan untuk semua kalangan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center p-4">
                        <h5 class="card-title">Responsif</h5>
                        <p class="card-text">Dapat diakses melalui perangkat apa pun, termasuk ponsel dan tablet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Developers Section -->
    <section id="developers" class="developers">
        <div class="container">
            <h2>Pengembang</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="card p-4">
                        <!-- Tambahkan gambar di sini -->
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="img/profil.jpeg" alt="Foto Maya Simahate" class="img-fluid rounded-circle mb-3"
                                style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="card-title">Maya Simahate</h5>
                        <p class="card-text">
                            Mahasiswa Fakultas Teknik Universitas Gajah Putih Takengon
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Purpose Section -->
    <section id="purpose" class="purpose">
        <div class="container">
            <h2>Tujuan Pembuatan Sistem</h2>
            <p class="text-center">
                Sistem ini dibuat untuk memenuhi syarat tugas final Mata Kuliah Open Source
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Kalkulator Sederhana | Maya Simahate</p>
    </footer>
</body>

</html>