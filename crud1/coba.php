<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto&display=swap" rel="stylesheet">
    <!--BOOSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--DATA TABLE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!--Own CSS-->
    <link rel="stylesheet" href="coba.css">
    <title>Data Mahasiswa| CRUD PHP</title>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
    <div class="container">
        <a class="navbar-brand" href="#">DATA MAHASISWA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link "  href="berhasil_login.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">TAMBAH DATA MAHASISWA</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="form-daftar2.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data </a>
                    </ul>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            </div>
    </div>
</nav>
<!--CLOSE NAVBAR-->

<!--CONTAINER-->
<div class="container">
    <div class="row my-3">
        <div class="col-md">
            <h6 class="text-uppercase text-center fw-bold">Edit/Hapus Data MAHASISWA</h6>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md">

        </div>
    </div>

    <div class="row my-5">
        <div class="col-md">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>jenis_kelamin</th>
                        <th>agama</th>
                        <th>Sekolah asal</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>
        <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($conn, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>". $siswa['id']."</td>";
                echo "<td>". $siswa['nama']."</td>";
                echo "<td>". $siswa['alamat']."</td>";
                echo "<td>". $siswa['jenis_kelamin']."</td>";
                echo "<td>". $siswa['agama']."</td>";
                echo "<td>". $siswa['sekolah_asal']."</td>";

                echo "<td>";
                echo "<a class='btn btn-warning' href='form-edit.php?id=".$siswa['id']."'><i class='bi bi-pen'></i></a> ";
                echo "<a class='btn btn-danger' href='hapus.php?id=".$siswa['id']."'><i class='bi bi-trash'></i></a>";
                echo "</tr>";
            }
            ?>
        </tbody>
        </table>
        </div>
    </div>
</div>
<!-- CLOSE CONTAINER-->

<!--FLOOTER-->

<!--CLOSE FLOOTER-->
<div class="container-fluid bg-dark text-white">
    <div class="row">
            <div class="col-md-6">
                <h4 class="text-uppercase fw-bold">About</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-md-6 text-center link">
                <h4 class="text-uppercase fw-bold">Links Accounts</h4>
                <a href="https://www.facebook.com/profile.php?id=100033628760083" target="_blank"><i class="bi bi-facebook fs-2"></i></a>
                <a href="https://github.com/RayhanAsauqi" target="_blank"><i class="bi bi-github fs-2"></i></a>
                <a href="https://www.instagram.com/reyhanalsauqi" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
                <a href="https://twitter.com/AlsauqiReyhan" target="_blank"><i class="bi bi-twitter fs-2"></i></a>
            </div>
    </div>
    <footer class="text-center" style="padding: 5px;">
        <p>Created with<i class="bi bi-suit-heart-fill" style="color: red;"></i> by</p><u class="fw-bold">Rayhan Alsauqi</u>
    </footer>
</div>
<!-- BOOSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- DATA TABLES-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src=https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js></script>
<script src=https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js
></script>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
</script>
</body>
</html>