<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Deteksi Penyakit Kulit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <div class="container">
        <div class="form-panel p-3">
            <h2 class="text-center p-3">Sistem Pakar Deteksi Penyakit Kulit</h2>
            <form method="post" action="backend.php">
                <div class="form-group">
                    <label><i class="icon fas fa-syringe"></i> Apakah Anda mengalami pembengkakan kulit?</label>
                    <input type="checkbox" class="form-control" name="question1">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda mengalami benjolan di kulit?</label>
                    <input type="checkbox" class="form-control" name="question2">

                    <label><i class="icon fas fa-syringe"></i> Apakah kulit Anda mengeluarkan nanah?</label>
                    <input type="checkbox" class="form-control" name="question3">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda demam?</label>
                    <input type="checkbox" class="form-control" name="question4">

                    <label><i class="icon fas fa-syringe"></i> Apakah mata Anda merah?</label>
                    <input type="checkbox" class="form-control" name="question5">

                    <label><i class="icon fas fa-syringe"></i> Apakah kulit kepala Anda berminyak?</label>
                    <input type="checkbox" class="form-control" name="question6">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda merasakan gatal?</label>
                    <input type="checkbox" class="form-control" name="question7">

                    <label><i class="icon fas fa-syringe"></i> Apakah ada luka dari bagian mulut?</label>
                    <input type="checkbox" class="form-control" name="question8">

                    <label><i class="icon fas fa-syringe"></i> Apakah ada semacam gelembung berisi air?</label>
                    <input type="checkbox" class="form-control" name="question9">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda merasakan nyeri?</label>
                    <input type="checkbox" class="form-control" name="question10">

                    <label><i class="icon fas fa-syringe"></i> Apakah kulit Anda melepuh?</label>
                    <input type="checkbox" class="form-control" name="question11">

                    <label><i class="icon fas fa-syringe"></i> Apakah timbul bercak-bercak merah?</label>
                    <input type="checkbox" class="form-control" name="question12">

                    <label><i class="icon fas fa-syringe"></i> Apakah terjadi iritasi kulit?</label>
                    <input type="checkbox" class="form-control" name="question13">

                    <label><i class="icon fas fa-syringe"></i> Apakah muncul uban sebelum waktunya?</label>
                    <input type="checkbox" class="form-control" name="question14">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda mengalami keringat yang berlebihan?</label>
                    <input type="checkbox" class="form-control" name="question15">

                    <label><i class="icon fas fa-syringe"></i> Apakah timbul warna kekuningan pada kulit Anda?</label>
                    <input type="checkbox" class="form-control" name="question16">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda mengalami kulit kering?</label>
                    <input type="checkbox" class="form-control" name="question17">

                    <label><i class="icon fas fa-syringe"></i> Apakah kulit bersisik pada bagian tertentu?</label>
                    <input type="checkbox" class="form-control" name="question18">

                    <label><i class="icon fas fa-syringe"></i> Apakah bintik atau bintik merah muncul di kulit?</label>
                    <input type="checkbox" class="form-control" name="question19">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda mengalami ruam kulit?</label>
                    <input type="checkbox" class="form-control" name="question20">

                    <label><i class="icon fas fa-syringe"></i> Apakah ada luka pada kulit yang perlu diatasi?</label>
                    <input type="checkbox" class="form-control" name="question21">

                    <label><i class="icon fas fa-syringe"></i> Apakah ada mati rasa pada kulit?</label>
                    <input type="checkbox" class="form-control" name="question22">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda memiliki luka yang tidak terasa
                        nyeri?</label>
                    <input type="checkbox" class="form-control" name="question23">

                    <label><i class="icon fas fa-syringe"></i> Apakah kulit tidak berkeringat secara normal?</label>
                    <input type="checkbox" class="form-control" name="question24">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda merasakan kesemutan pada kulit?</label>
                    <input type="checkbox" class="form-control" name="question25">

                    <label><i class="icon fas fa-syringe"></i> Apakah ada benjolan berwarna merah atau kulit
                        kemerahan?</label>
                    <input type="checkbox" class="form-control" name="question26">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda mengalami infeksi kulit?</label>
                    <input type="checkbox" class="form-control" name="question27">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda sering mengalami sakit kepala?</label>
                    <input type="checkbox" class="form-control" name="question28">

                    <label><i class="icon fas fa-syringe"></i> Apakah ada rasa kelelahan secara umum?</label>
                    <input type="checkbox" class="form-control" name="question29">

                    <label><i class="icon fas fa-syringe"></i> Apakah Anda mengalami mual?</label>
                    <input type="checkbox" class="form-control" name="question30">

                    <label><i class="icon fas fa-syringe"></i> Apakah terdapat nyeri otot pada tubuh?</label>
                    <input type="checkbox" class="form-control" name="question31">

                    <label><i class="icon fas fa-syringe"></i> Apakah ada benjolan putih di kulit?</label>
                    <input type="checkbox" class="form-control" name="question32">

                    <label><i class="icon fas fa-syringe"></i> Apakah kulit memiliki bintil atau tonjolan?</label>
                    <input type="checkbox" class="form-control" name="question33">

                    <label><i class="icon fas fa-syringe"></i> Apakah ada lesi gatal atau kemerahan pada kulit?</label>
                    <input type="checkbox" class="form-control" name="question34">

                    <label><i class="icon fas fa-syringe"></i> Apakah timbul tonjolan kasar atau keras?</label>
                    <input type="checkbox" class="form-control" name="question35">

                    <label><i class="icon fas fa-syringe"></i> Apakah timbul bintik atau bercak putih yang berwarna
                        terang?</label>
                    <input type="checkbox" class="form-control" name="question36">

                    <label><i class="icon fas fa-syringe"></i> Apakah timbul ruam yang berbentuk
                        cincin?</label>
                    <input type="checkbox" class="form-control" name="question37">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>