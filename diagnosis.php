<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.0">
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
                    <div class="row align-items-center">
                        <div class="col-md-4 p-2">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question1" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda mengalami pembengkakan kulit?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question2" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda mengalami benjolan di kulit?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question3" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah kulit Anda mengeluarkan nanah?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question4" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda demam?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question5" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah mata Anda merah?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question6" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah kulit kepala Anda berminyak?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question7" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda merasakan gatal?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question8" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah ada luka dari bagian mulut?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question9" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah ada semacam gelembung berisi air?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question10" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda merasakan nyeri? </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question11" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah kulit Anda melepuh?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question12" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah timbul bercak-bercak merah?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question13" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah terjadi iritasi kulit?
                            </label>
                        </div>
                        <div class="col-md-4 p-2">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question14" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah muncul uban sebelum waktunya?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question15" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda mengalami keringat yang
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question16" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah timbul warna kekuningan pada kulit
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question17" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda mengalami kulit kering?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question18" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah kulit bersisik pada bagian
                                tertentu?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question19" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah bintik atau bintik merah muncul di
                                kulit?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question20" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda mengalami ruam kulit?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question21" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah ada luka pada kulit yang perlu
                                diatasi?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question22" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah ada mati rasa pada kulit?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question23" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda memiliki luka yang tidak terasa
                                nyeri?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question24" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah kulit tidak berkeringat secara
                                normal?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question25" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda merasakan kesemutan pada
                                kulit?
                            </label>
                        </div>
                        <div class="col-md-4 p-2">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question26" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah ada benjolan berwarna merah atau kulit
                                kemerahan?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question27" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda mengalami infeksi kulit?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question28" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda sering mengalami sakit
                                kepala?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question29" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah ada rasa kelelahan secara umum?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question30" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah Anda mengalami mual?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question31" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah terdapat nyeri otot pada
                                tubuh?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question32" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah ada benjolan putih di kulit?
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="question33" value="1"
                                    onclick="updateValue(this)">
                                <i class="icon fas fa-syringe"></i> Apakah kulit memiliki bintil atau
                                tonjolan?
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="question34" value="1"
                                        onclick="updateValue(this)">
                                    <i class="icon fas fa-syringe"></i> Apakah ada lesi gatal atau kemerahan pada
                                    kulit?
                                </label>
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="question35" value="1"
                                        onclick="updateValue(this)">
                                    <i class="icon fas fa-syringe"></i> Apakah timbul tonjolan kasar atau
                                    keras?
                                </label>
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="question36" value="1"
                                        onclick="updateValue(this)">
                                    <i class="icon fas fa-syringe"></i> Apakah timbul bintik atau bercak putih yang
                                    berwarna
                                    terang?
                                </label>
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="question37" value="1"
                                        onclick="updateValue(this)">
                                    <i class="icon fas fa-syringe"></i> Apakah timbul ruam yang berbentuk
                                    cincin?
                                </label>
                        </div>
                    </div>

                </div>
                <button type="submit" name="predict" class="btn btn-primary btn-block">Submit</button>
                <!-- <table class="table table-hover table table-light table-striped table-striped-columns text-center m-5">
                    <thead>
                        <tr>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama Penyakit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                0
                            </td>
                            <td>
                                0
                            </td>
                        </tr>
                    </tbody>
                </table> -->
            </form>
        </div>
    </div>
    <script>
    function updateValue() {
        // var hiddenInput = document.querySelector(`[name="${checkbox.name}_hidden"]`);
        // hiddenInput.value = checkbox.checked ? 1 : 0;
        // console.log()
    }
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>