<?php
include_once("config.php");

if(isset($_POST['daftar'])) {


    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];


    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama','$sekolah')";
    $query = mysqli_query($conn,$sql);

    if($query) {
        header('Location: berhasil_login.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }



}else{
    die("Akses dilarang...");
}
?>