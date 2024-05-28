<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Deteksi Penyakit Kulit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5">Sistem Pakar Deteksi Penyakit Kulit</h2>
        <form method="post" action="backend.php">
            <div class="form-group">
                <label for="question1">Apakah anda mengalami pembengkakan kulit?</label>
                <select class="form-control" id="question1" name="question1">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question2">Apakah anda mengalami benjolan di kulit?</label>
                <select class="form-control" id="question2" name="question2">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question3">Apakah kulit anda mengeluarkan nanah?</label>
                <select class="form-control" id="question3" name="question3">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question4">Apakah anda demam?</label>
                <select class="form-control" id="question4" name="question4">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question5">Apakah mata anda merah?</label>
                <select class="form-control" id="question5" name="question5">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question6">Apakah kulit kepala anda berminyak?</label>
                <select class="form-control" id="question6" name="question6">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question7">Apakah anda merasakan gatal?</label>
                <select class="form-control" id="question7" name="question7">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question8">Apakah ada luka dari bagian mulut?</label>
                <select class="form-control" id="question8" name="question8">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question9">Apakah ada semacam gelembung berisi air?</label>
                <select class="form-control" id="question9" name="question9">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question10">Apakah anda merasakan nyeri?</label>
                <select class="form-control" id="question10" name="question10">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question11">Apakah kulit anda melepuh?</label>
                <select class="form-control" id="question11" name="question11">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question12">Apakah timbul bercak bercak merah?</label>
                <select class="form-control" id="question12" name="question12">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question13">Apakah terjadi iritasi kulit?</label>
                <select class="form-control" id="question13" name="question13">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question14">Apakah muncul uban sebelum waktunya?</label>
                <select class="form-control" id="question14" name="question14">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question15">Apakah anda mengalami keringat yang berlebihan?</label>
                <select class="form-control" id="question15" name="question15">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question16">Apakah ada timbul warna kekuningan pada kulit anda?</label>
                <select class="form-control" id="question16" name="question16">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question17">Apakah anda mengalami kulit kering?</label>
                <select class="form-control" id="question17" name="question17">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question18">Apakah kulit bersisik pada bagian tertentu?</label>
                <select class="form-control" id="question18" name="question18">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question19">Apakah bintik atau bintik merah muncul di kulit?</label>
                <select class="form-control" id="question19" name="question19">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question20">Apakah Anda mengalami ruam kulit?</label>
                <select class="form-control" id="question20" name="question20">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question21">Apakah ada luka pada kulit yang perlu diatasi?</label>
                <select class="form-control" id="question21" name="question21">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question22">Apakah ada mati rasa pada kulit?</label>
                <select class="form-control" id="question22" name="question22">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question23">Apakah Anda memiliki luka yang tidak terasa nyeri?</label>
                <select class="form-control" id="question23" name="question23">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question24">Apakah kulit tidak berkeringat secara normal?</label>
                <select class="form-control" id="question24" name="question24">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question25">Apakah Anda merasakan kesemutan pada kulit?</label>
                <select class="form-control" id="question25" name="question25">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question26">Apakah ada benjolan berwarna merah atau kulit kemerahan?</label>
                <select class="form-control" id="question26" name="question26">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question27">Apakah Anda mengalami infeksi kulit?</label>
                <select class="form-control" id="question27" name="question27">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question28">Apakah Anda sering mengalami sakit kepala?</label>
                <select class="form-control" id="question28" name="question28">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question29">Apakah ada rasa kelelahan secara umum?</label>
                <select class="form-control" id="question29" name="question29">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>
                <label for="question30">Apakah Anda mengalami mual?</label>
                <select class="form-control" id="question30" name="question30">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question31">Apakah terdapat nyeri otot pada tubuh?</label>
                <select class="form-control" id="question31" name="question31">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question32">Apakah ada benjolan putih di kulit?</label>
                <select class="form-control" id="question32" name="question32">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question33">Apakah kulit memiliki bintil atau tonjolan?</label>
                <select class="form-control" id="question33" name="question33">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question34">Apakah ada lesi gatal atau kemerahan pada kulit?</label>
                <select class="form-control" id="question34" name="question34">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question35">Apakah timbul tonjolan kasar atau keras?</label>
                <select class="form-control" id="question35" name="question35">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question36">Apakah timbul bintik atau bercak putih yang berwarna terang?</label>
                <select class="form-control" id="question36" name="question36">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>

                <label for="question37">Apakah timbul ruam yang berbentuk cincin?</label>
                <select class="form-control" id="question37" name="question37">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>
            </div>
            <button type="submit" name="predict" class="btn btn-primary">Diagnosis</button>
        </form>
    </div>
</body>
</html>
