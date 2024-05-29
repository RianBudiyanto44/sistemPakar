<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Deteksi Penyakit Kulit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .navbar-custom {
        background-color: #007bff;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
        color: white;
    }

    .navbar-custom .nav-link:hover {
        color: #ffcc00;
    }

    .jumbotron-custom {
        background-color: #0056b3;
        color: white;
        padding: 30px;
        border-radius: 8px;
        text-align: center;
    }

    .btn-custom {
        background-color: #ffcc00;
        border: none;
    }

    .btn-custom:hover {
        background-color: #e6b800;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">Pakar Kulit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="diagnosis.php">Diagnosis</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang di Sistem Pakar Deteksi Penyakit Kulit</h1>
            <p class="lead">Deteksi dini berbagai penyakit kulit dengan mudah dan cepat menggunakan sistem pakar kami.
            </p>
            <hr class="my-4">
            <p>Klik tombol di bawah ini untuk memulai diagnosis.</p>
            <a class="btn btn-primary btn-lg" href="diagnosis.php" role="button">Mulai Diagnosis</a>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>