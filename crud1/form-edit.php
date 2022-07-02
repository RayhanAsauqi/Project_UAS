<?php
include_once("config.php");

if( !isset($_GET['id'])){
    header('Location: list-siswa.php');
}
$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($conn,$sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="coba.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Formulir Edit Siswa | SMK coding</title>
    </head>

    <body>
        <header >
            <div class="container-form-3">
            <h3>Formulir Edit Siswa</h3>
            </div>
        </header>

        <form action="proses-edit.php" method="POST">
        <div class="container-form2">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $siswa['id']?>"/>
            <p>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama']?>"/>
                </div>
            </p>
            <p>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat"><?php echo $siswa['alamat']?></textarea>
                </div>
            </p>
            <p>
                <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <?php $jk = $siswa['jenis_kelamin'];?>
                <label><Input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ?"checked": "" ?>>Laki-laki</label>
                <label><Input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ?"checked": "" ?>>Perempuan</label>
                </div>
            </p>
            <p>
            <label for="agama">Agama</label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == "Islam") ? "selected": "" ?> >Islam</option>
                <option <?php echo ($agama == "Kristen") ? "selected": "" ?> >Kristen</option>
                <option <?php echo ($agama == " Buddha") ? "selected": "" ?> >Buddha</option>
                <option <?php echo ($agama == "Hindu") ? "selected": "" ?> >Hindu</option>
                <option <?php echo ($agama == "Khonghucu") ? "selected": "" ?> >Khonghucu</option>
            </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal']?>"/>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-warning"/>
            </p>
            </fieldset>
                </div>

        </form>
    </body>

</html>