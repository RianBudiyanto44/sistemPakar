<?php
    include 'connect.php';

    // $filename = 'obat/erisipelas.txt';
    // $text = file_get_contents($filename);
    $penyakit = "campak";
    $query = mysqli_query($konek,"SELECT * FROM data_penyakit WHERE nama_penyakit = '$penyakit'");
    while($data=mysqli_fetch_array($query)) {
        $filename = $data['deskripsi'];
        $filename2 = $data['obat'];
    }

    $text = file_get_contents($filename);
    $text2 = file_get_contents($filename2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Campak</h1>
    <p>
        <?php
             echo $text;
        ?>
    </p>

    <div class="d-flex justify-content-center">
        <table class="table table-bordered w-75">
            <tr>
                <td>Nama Penyakit</td>
                <td><p>
                    <?php
                        echo $penyakit;
                    ?>
                </p></td>
            </tr>
            <tr>
                <td>deskripsi Penyakit</td>
                <td><p>
                    <?php
                        echo $text;
                    ?>
                </p></td>
            </tr>
            <tr>
                <td>Obat dan Penanggulangan</td>
                <td><p>
                    <?php
                        echo $text2;
                    ?>
                </p></td>
            </tr>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>