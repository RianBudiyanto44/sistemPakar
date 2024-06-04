<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center">
        <h1>List Penyakit</h1>
        <div class="row">
            <div class="col">
            <table class="table table-bordered">
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
                        <td><a href="listPenyakit.php?id=<?php echo $data['id'];?>"><?php echo $data['nama_penyakit']; ?></a></td>
                    </tr>
                    <?php }?>
            </table>
            </div>
            <div class="col">
            <table class="table table-bordered">
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
                        <td><a href="listPenyakit.php?id=<?php echo $data['id'];?>"><?php echo $data['nama_penyakit']; ?></a></td>
                    </tr>
                    <?php }?>
            </table>
            </div>
            <div class="col">
            <table class="table table-bordered">
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
                        <td><a href="listPenyakit.php?id=<?php echo $data['id'];?>"><?php echo $data['nama_penyakit']; ?></a></td>
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