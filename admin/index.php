<?php
require '../koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR CLOSED-->
    <h1 class="text-center mt-5 mb-5">TABEL UNTUK ADMIN</h1>
    <div class="container">
        <div class="row">
            <div class="col-md d-flex justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Dskripsi</th>
                    <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $loop = mysqli_query($koneksi, "select * from buku ");
                while($b = mysqli_fetch_array($loop)){
                ?>
                    <tr>
                        <th scope="row"><?=$b ['id_buku']?></th>
                        <td><?=$b ['judul_buku']?> </td>
                        <td><?=$b ['deskripsi']?> </td>
                        <td><?=$b ['harga']?> </td>
                    </tr>
                <?php
                };
                ?>
                </tbody>
            </table>

            </div>
        </div>
        <div class="row">
            <div class="col-md d-flex justify-content-center flex-column mt-5 mb-5">
                <h6 class="text-center mt-2 mb-5">TAMBAH DATA BUKU</h6>
                <form action="" method="POST">
                    <input type="text" name="judul" class="form-control" placeholder="Judul buku">
                    <input type="text" name="deskripsi" class="form-control" placeholder="Deskrispi">
                    <input type="text" name="harga" class="form-control" placeholder="Harga buku">
                    <button type="submit" name="tambahbuku" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
