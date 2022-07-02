<?php
include_once("config.php");

if(isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($conn,$sql);

    if($query){
        header('Location: coba.php');
    } else {
        die("gagal menghapus...");
    }
}else {
    die("akses dilarang...");
}
?>