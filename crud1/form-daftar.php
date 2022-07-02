<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="coba.css">
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
        <title>Formulir Pendaftaran Siswa Baru | SMK coding</title>  
    </head>

    <body>
        <header>
            <div class="container-form">
            <h3>Formulir Pendaftaran Mahasiswa</h3>
            </div>
        </header>

        <form action="proses-pendaftaran.php" method="POST">

        <div class="container-form2">
            <p>
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" placeholder="nama lengkap"/>
                </div>
            </p>
            <p>
                <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat"></textarea>
                </div>              
            </p>
            <p>
                <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
                </div>
            </p>
            <p>
                <div class="form-group">
                <label for="agama">Agama</label>
                <div class="input">
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Khonghucu</option>
                </select>
                </div>
                </div>
            </p>
            <p>
                <div class="form-group">
                <label for="sekolah_asal">Asal Sekolah:</label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah"/>
                </div>
            </p>
            <p>
                <div class="form-group">
                <input type="submit" value="Daftar" name="daftar" class="btn btn-primary">
                <!-- <input type="reset" value="Batal" class="tombol reset"/> -->
                <a href="berhasil_login.php" class="btn btn-danger">Back</a>
            </div>
            </p>
        </div>       
        </form>
    </body>
</html>