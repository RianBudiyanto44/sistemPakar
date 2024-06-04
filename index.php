<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Deteksi Penyakit Kulit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand text-center" style="font-size: 24px; font-weight: bold;" href="index.php">Pakar
                Kulit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="diagnosis.php">Diagnosis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informasi.php">Informasi Penyakit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 p-0">
                <div class="jumbotron jumbotron-custom">
                    <h1 class="display-4">Selamat Datang di Sistem Pakar Deteksi Penyakit Kulit</h1>
                    <p class="lead">Deteksi dini berbagai penyakit kulit dengan mudah dan cepat menggunakan sistem pakar
                        kami.</p>
                    <hr class="my-4">
                    <p>Klik tombol di bawah ini untuk memulai diagnosis.</p>
                    <a class="btn btn-custom btn-lg" href="diagnosis.php" role="button"><i
                            class="fas fa-stethoscope"></i> Mulai Diagnosis</a>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <img src="assets/images/penyakitKulit.jpeg" alt="Healthcare Image" class="img-fluid">
            </div>
        </div>
    </div>
    <footer class="text-center py-3 mt-5">
        <p>&copy; 2024 Sistem Pakar Deteksi Penyakit Kulit. All rights reserved.</p>
    </footer>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.