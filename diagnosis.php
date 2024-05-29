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
        <div class="form-panel">
            <h2 class="text-center">Sistem Pakar Deteksi Penyakit Kulit</h2>
            <form method="post" action="backend.php">
                <!-- Form content here -->
                <div class="form-group">
                    <label for="question1"><i class="icon fas fa-syringe"></i>Apakah Anda mengalami pembengkakan
                        kulit?</label>
                    <select class="form-control" id="question1" name="question1">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question2"><i class="icon fas fa-syringe"></i>Apakah Anda mengalami benjolan di
                        kulit?</label>
                    <select class="form-control" id="question2" name="question2">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question3"><i class="icon fas fa-syringe"></i>Apakah kulit Anda mengeluarkan
                        nanah?</label>
                    <select class="form-control" id="question3" name="question3">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question4"><i class="icon fas fa-syringe"></i>Apakah Anda demam?</label>
                    <select class="form-control" id="question4" name="question4">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question5"><i class="icon fas fa-syringe"></i>Apakah mata Anda merah?</label>
                    <select class="form-control" id="question5" name="question5">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question6"><i class="icon fas fa-syringe"></i>Apakah kulit kepala Anda
                        berminyak?</label>
                    <select class="form-control" id="question6" name="question6">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question7"><i class="icon fas fa-syringe"></i>Apakah Anda merasakan gatal?</label>
                    <select class="form-control" id="question7" name="question7">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question8"><i class="icon fas fa-syringe"></i>Apakah ada luka dari bagian mulut?</label>
                    <select class="form-control" id="question8" name="question8">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question9"><i class="icon fas fa-syringe"></i>Apakah ada semacam gelembung berisi
                        air?</label>
                    <select class="form-control" id="question9" name="question9">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question10"><i class="icon fas fa-syringe"></i>Apakah Anda merasakan nyeri?</label>
                    <select class="form-control" id="question10" name="question10">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question11"><i class="icon fas fa-syringe"></i>Apakah kulit Anda melepuh?</label>
                    <select class="form-control" id="question11" name="question11">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question12"><i class="icon fas fa-syringe"></i>Apakah timbul bercak-bercak
                        merah?</label>
                    <select class="form-control" id="question12" name="question12">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question13"><i class="icon fas fa-syringe"></i>Apakah terjadi iritasi kulit?</label>
                    <select class="form-control" id="question13" name="question13">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question14"><i class="icon fas fa-syringe"></i>Apakah muncul uban sebelum
                        waktunya?</label>
                    <select class="form-control" id="question14" name="question14">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question15"><i class="icon fas fa-syringe"></i>Apakah Anda mengalami keringat yang
                        berlebihan?</label>
                    <select class="form-control" id="question15" name="question15">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question16"><i class="icon fas fa-syringe"></i>Apakah timbul warna kekuningan pada kulit
                        Anda?</label>
                    <select class="form-control" id="question16" name="question16">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question17"><i class="icon fas fa-syringe"></i>Apakah Anda mengalami kulit
                        kering?</label>
                    <select class="form-control" id="question17" name="question17">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question18"><i class="icon fas fa-syringe"></i>Apakah kulit bersisik pada bagian
                        tertentu?</label>
                    <select class="form-control" id="question18" name="question18">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question19"><i class="icon fas fa-syringe"></i>Apakah bintik atau bintik merah muncul di
                        kulit?</label>
                    <select class="form-control" id="question19" name="question19">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question20"><i class="icon fas fa-syringe"></i>Apakah Anda mengalami ruam kulit?</label>
                    <select class="form-control" id="question20" name="question20">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question21"><i class="icon fas fa-syringe"></i>Apakah ada luka pada kulit yang perlu
                        diatasi?</label>
                    <select class="form-control" id="question21" name="question21">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question22"><i class="icon fas fa-syringe"></i>Apakah ada mati rasa pada kulit?</label>
                    <select class="form-control" id="question22" name="question22">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question23"><i class="icon fas fa-syringe"></i>Apakah Anda memiliki luka yang tidak
                        terasa nyeri?</label>
                    <select class="form-control" id="question23" name="question23">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question24"><i class="icon fas fa-syringe"></i>Apakah kulit tidak berkeringat secara
                        normal?</label>
                    <select class="form-control" id="question24" name="question24">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question25"><i class="icon fas fa-syringe"></i>Apakah Anda merasakan kesemutan pada
                        kulit?</label>
                    <select class="form-control" id="question25" name="question25">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question26"><i class="icon fas fa-syringe"></i>Apakah ada benjolan berwarna merah atau
                        kulit kemerahan?</label>
                    <select class="form-control" id="question26" name="question26">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question27"><i class="icon fas fa-syringe"></i>Apakah Anda mengalami infeksi
                        kulit?</label>
                    <select class="form-control" id="question27" name="question27">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question28"><i class="icon fas fa-syringe"></i>Apakah Anda sering mengalami sakit
                        kepala?</label>
                    <select class="form-control" id="question28" name="question28">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question29"><i class="icon fas fa-syringe"></i>Apakah ada rasa kelelahan secara
                        umum?</label>
                    <select class="form-control" id="question29" name="question29">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question30"><i class="icon fas fa-syringe"></i>Apakah Anda mengalami mual?</label>
                    <select class="form-control" id="question30" name="question30">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question31"><i class="icon fas fa-syringe"></i>Apakah terdapat nyeri otot pada
                        tubuh?</label>
                    <select class="form-control" id="question31" name="question31">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question32"><i class="icon fas fa-syringe"></i>Apakah ada benjolan putih di
                        kulit?</label>
                    <select class="form-control" id="question32" name="question32">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question33"><i class="icon fas fa-syringe"></i>Apakah kulit memiliki bintil atau
                        tonjolan?</label>
                    <select class="form-control" id="question33" name="question33">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question34"><i class="icon fas fa-syringe"></i>Apakah ada lesi gatal atau kemerahan pada
                        kulit?</label>
                    <select class="form-control" id="question34" name="question34">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question35"><i class="icon fas fa-syringe"></i>Apakah timbul tonjolan kasar atau
                        keras?</label>
                    <select class="form-control" id="question35" name="question35">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question36"><i class="icon fas fa-syringe"></i>Apakah timbul bintik atau bercak putih
                        yang berwarna terang?</label>
                    <select class="form-control" id="question36" name="question36">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>

                    <label for="question37"><i class="icon fas fa-syringe"></i>Apakah timbul ruam yang berbentuk
                        cincin?</label>
                    <select class="form-control" id="question37" name="question37">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>
                </div>
                <button type="submit" name="predict" class="btn btn-primary btn-block">Diagnosis</button>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>