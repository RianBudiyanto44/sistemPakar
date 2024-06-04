<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="container text-center">
        <h1 class="mb-5 mt-5">Informasi Penyakit Kulit</h1>
        <div class="row">
            <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Penyakit</th>
                    </tr>
                </thead>
                    <?php
                        include 'connect.php';
                        // if(isset($_GET['search'])){
                        //   $search = $_GET['search'];
                        //   $query = mysqli_query($konek,"SELECT * FROM buku LEFT JOIN penerbit ON buku.penerbit = penerbit.id_penerbit WHERE nama LIKE '%$search%'");
                        // } else {
                        //   $query = mysqli_query($konek,"SELECT * FROM buku LEFT JOIN penerbit ON buku.penerbit = penerbit.id_penerbit");
                        // }
                        $query = mysqli_query($konek,"SELECT * FROM data_penyakit WHERE id < 13");
                        
                        while($data=mysqli_fetch_array($query))
                        { 
                        ?>
        
        
                    <tr>
                        <!-- <th scope="row">1</th> -->
                        <td>P0<?php echo $data['id']; ?></td>
                        <td><a href="informasi.php?id=<?php echo $data['id'];?>" style="color: black;"><?php echo $data['nama_penyakit']; ?></a></td>
                    </tr>
                    <?php }?>
            </table>
            </div>
            <div class="col">
            <table class="table table-bordered">
            <thead>
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Penyakit</th>
                    </tr>
                </thead>
                    <?php
                        include 'connect.php';
                        // if(isset($_GET['search'])){
                        //   $search = $_GET['search'];
                        //   $query = mysqli_query($konek,"SELECT * FROM buku LEFT JOIN penerbit ON buku.penerbit = penerbit.id_penerbit WHERE nama LIKE '%$search%'");
                        // } else {
                        //   $query = mysqli_query($konek,"SELECT * FROM buku LEFT JOIN penerbit ON buku.penerbit = penerbit.id_penerbit");
                        // }
                        $query = mysqli_query($konek,"SELECT * FROM data_penyakit WHERE id > 12 AND id < 25");
                        
                        while($data=mysqli_fetch_array($query))
                        { 
                        ?>
        
        
                    <tr>
                        <!-- <th scope="row">1</th> -->
                        <td>P0<?php echo $data['id']; ?></td>
                        <td><a href="informasi.php?id=<?php echo $data['id'];?>" style="color: black;"><?php echo $data['nama_penyakit']; ?></a></td>
                    </tr>
                    <?php }?>
            </table>
            </div>
            <div class="col">
            <table class="table table-bordered">
            <thead>
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Penyakit</th>
                    </tr>
                </thead>
                    <?php
                        include 'connect.php';
                        // if(isset($_GET['search'])){
                        //   $search = $_GET['search'];
                        //   $query = mysqli_query($konek,"SELECT * FROM buku LEFT JOIN penerbit ON buku.penerbit = penerbit.id_penerbit WHERE nama LIKE '%$search%'");
                        // } else {
                        //   $query = mysqli_query($konek,"SELECT * FROM buku LEFT JOIN penerbit ON buku.penerbit = penerbit.id_penerbit");
                        // }
                        $query = mysqli_query($konek,"SELECT * FROM data_penyakit WHERE id > 24");
                        
                        while($data=mysqli_fetch_array($query))
                        { 
                        ?>
        
        
                    <tr>
                        <!-- <th scope="row">1</th> -->
                        <td>P0<?php echo $data['id']; ?></td>
                        <td><a href="informasi.php?id=<?php echo $data['id'];?>" style="color: black;"><?php echo $data['nama_penyakit']; ?></a></td>
                    </tr>
                    <?php }?>
            </table>
            </div>
        </div>
    </div>

    <?php
        include 'connect.php';

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            // echo $id;

            $query = mysqli_query($konek,"SELECT * FROM data_penyakit WHERE id = '$id'");
            while($data=mysqli_fetch_array($query)) {
                $penyakit = $data['nama_penyakit'];
                $deskripsi = $data['deskripsi'];
                $obat = $data['obat'];
            }

            $text_deskripsi = file_get_contents($deskripsi);
            $text_obat = file_get_contents($obat);
    ?>
        <div class="d-flex align-items-center flex-column">
        <h2 class="mb-5 mt-5 text-center">Deskripsi</h2>
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
                <td>Deskripsi Penyakit</td>
                <td><p>
                    <?php
                        echo $text_deskripsi;
                    ?>
                </p></td>
            </tr>
            <tr>
                <td>Obat dan Penanggulangan</td>
                <td><p>
                    <?php
                        echo $text_obat;
                    ?>
                </p></td>
            </tr>
        </table>

    </div>
    <?php
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>