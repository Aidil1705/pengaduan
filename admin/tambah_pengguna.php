
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .tes{
            margin-top:-600px !important;
        }
        h2{
            color:white;
            font-family:arial;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <title>Tambah Pengaduan</title>
</head>
<body>
<?php
    include "header.php";
    ?>
    <img class="gambar" src="../img/bg4.jpg" width="100%">
    
    <form action="" method="post">
        <div class="tes">
            <h2>Silahkan Mengadu Disini</h2>
        <table>
            <tr>
                <td>Nama Pengguna</td>
                <td><input type="text" name="nama" required="required" ></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required="required"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" required="required"></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td><input type="text" name="tlp" maxlength="13" minlength="12" required="required" ></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><input type="radio" name="level" value="admin">Admin &nbsp;&nbsp;&nbsp;  <input type="radio" name="level" value="petugas">Petugas</td>
            </tr>
        </table>
        <br>
        <button class="btn" type="submit" name="simpan">Tambah</button>
        </div>
    </form>
    <?php
    include '../koneksi.php';
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $alamat = $_POST['alamat'];
        $tlp = $_POST['tlp'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        mysqli_query($conn,"INSERT INTO `petugas` ( `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES ('$nama', '$username', '$password', '$tlp', '$level')");
         echo"<script>alert('Data Berhasil Ditambahkan'); window.location.assign('data_pengguna.php');
         </script>";
 

    }
    ?>
</body>
</html>