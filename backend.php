<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediksi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php

    $campak         = [0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0];
    $eksim          = [0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $erisipelas     = [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0];
    $eritrasma      = [0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $favus          = [0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0];
    $fixeddrugerupt = [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $folikulitis    = [1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $furunkel       = [1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $granulomaanulare   = [0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $hemangioma     = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $herpes         = [0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0];
    $hypohidrosis   = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $impetigo       = [0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $kandidosismukokutan = [1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $keloid           = [0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0];
    $keratosispilaris = [0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $kudis          = [0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $kurap          = [0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $kutil          = [0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0];
    $larvamigrans   = [1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0];
    $lepra          = [1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $lichenplanus   = [0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $lukaakibatbahankimia      = [1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $lukaakibatsengatanlistrik = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $milia          = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0];

    if (isset($_POST['predict'])) {
        $question1 = $_POST['question1'];
        $question2 = $_POST['question2'];
        $question3 = $_POST['question3'];
        $question4 = $_POST['question4'];
        $question5 = $_POST['question5'];
        $question6 = $_POST['question6'];
        $question7 = $_POST['question7'];
        $question8 = $_POST['question8'];
        $question9 = $_POST['question9'];
        $question10 = $_POST['question10'];
        $question11 = $_POST['question11'];
        $question12 = $_POST['question12'];
        $question13 = $_POST['question13'];
        $question14 = $_POST['question14'];
        $question15 = $_POST['question15'];
        $question16 = $_POST['question16'];
        $question17 = $_POST['question17'];
        $question18 = $_POST['question18'];
        $question19 = $_POST['question19'];
        $question20 = $_POST['question20'];
        $question21 = $_POST['question21'];
        $question22 = $_POST['question22'];
        $question23 = $_POST['question23'];
        $question24 = $_POST['question24'];
        $question25 = $_POST['question25'];
        $question26 = $_POST['question26'];
        $question27 = $_POST['question27'];
        $question28 = $_POST['question28'];
        $question29 = $_POST['question29'];
        $question30 = $_POST['question30'];
        $question31 = $_POST['question31'];
        $question32 = $_POST['question32'];
        $question33 = $_POST['question33'];
        $question34 = $_POST['question34'];
        $question35 = $_POST['question35'];
        $question36 = $_POST['question36'];
        $question37 = $_POST['question37'];

        $gejala = [
            $question1, $question2, $question3, $question4, $question5,
            $question6, $question7, $question8, $question9, $question10,
            $question11, $question12, $question13, $question14, $question15,
            $question16, $question17, $question18, $question19, $question20,
            $question21, $question22, $question23, $question24, $question25,
            $question26, $question27, $question28, $question29, $question30,
            $question31, $question32, $question33, $question34, $question35,
            $question36, $question37
        ];

        if ($gejala == $campak) {
            echo "prediksi penyakit = campak";
        } else if ($gejala == $eksim) {
            echo "prediksi penyakit = eksim";
        } else if ($gejala == $erisipelas) {
            echo "prediksi penyakit = erisipelas";
        } else if ($gejala == $eritrasma) {
            echo "prediksi penyakit = eritrasma";
        } else if ($gejala == $favus) {
            echo "prediksi penyakit = favus";
        } else if ($gejala == $fixeddrugerupt) {
            echo "prediksi penyakit = fixeddrugerupt";
        } else if ($gejala == $folikulitis) {
            echo "prediksi penyakit = folikulitis";
        } else if ($gejala == $furunkel) {
            echo "prediksi penyakit = furunkel";
        } else if ($gejala == $granulomaanulare) {
            echo "prediksi penyakit = granulomaanulare";
        } else if ($gejala == $hemangioma) {
            echo "prediksi penyakit = hemangioma";
        } else if ($gejala == $herpes) {
            echo "prediksi penyakit = herpes";
        } else if ($gejala == $hypohidrosis) {
            echo "prediksi penyakit = hypohidrosis";
        } else if ($gejala == $impetigo) {
            echo "prediksi penyakit = impetigo";
        } else if ($gejala == $kandidosismukokutan) {
            echo "prediksi penyakit = kandidosismukokutan";
        } else if ($gejala == $keloid) {
            echo "prediksi penyakit = keloid";
        } else if ($gejala == $keratosispilaris) {
            echo "prediksi penyakit = keratosispilaris";
        } else if ($gejala == $kudis) {
            echo "prediksi penyakit = kudis";
        } else if ($gejala == $kurap) {
            echo "prediksi penyakit = kurap";
        } else if ($gejala == $kutil) {
            echo "prediksi penyakit = kutil";
        } else if ($gejala == $larvamigrans) {
            echo "prediksi penyakit = larvamigrans";
        } else if ($gejala == $lepra) {
            echo "prediksi penyakit = lepra";
        } else if ($gejala == $lichenplanus) {
            echo "prediksi penyakit = lichenplanus";
        } else if ($gejala == $lukaakibatbahankimia) {
            echo "prediksi penyakit = luka akibat bahan kimia";
        } else if ($gejala == $lukaakibatsengatanlistrik) {
            echo "prediksi penyakit = luka akibat sengatan listrik";
        } else if ($gejala == $milia) {
            echo "prediksi penyakit = milia";
        } else {
            echo "Tidak ada prediksi penyakit yang sesuai";
        }


        // $checkPenerbit = mysqli_query($konek, "SELECT id_penerbit FROM penerbit WHERE nama_penerbit = '$penerbit'");
        // $rowPenerbit = mysqli_fetch_assoc($checkPenerbit);

        // if($rowPenerbit) {
        //     // Jika penerbit sudah terdaftar, tambahkan buku
        //     $id_penerbit = $rowPenerbit['id_penerbit'];
        //     $query = mysqli_query($konek, "INSERT INTO buku (id, nama, kategori, harga, stok, penerbit, pengarang) VALUES ('$id', '$judul', '$kategori', '$harga', '$stok', '$id_penerbit', '$pengarang')");

        //     if($query){
        //         header("Location: admin.php");
        //     } else {
        //         echo "Gagal menambah buku.";
        //     }
        // } else {
        //     echo "Penerbit belum terdaftar.";
        // }
    }
    ?>
    <br>
    <a href="index.php"><button type="button" class="btn btn-primary">Kembali</button></a>

</body>

</html>