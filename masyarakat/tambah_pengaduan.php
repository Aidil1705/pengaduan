<?php
session_start();
?>
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
    
    <form action="" method="post" enctype="multipart/form-data">
        <div class="tes">
            <h2>Silahkan Mengadu Disini</h2>
        <table>
            <tr>
                <td>Tanggal Pengaduan</td>
                <td><input type="text" name="tgl" required="required" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d (H:i:s)') ?>" readonly></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="nik" required="required" value="<?= $_SESSION['nik'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Isi Laporan</td>
                <td><textarea name="isi" id="" cols="30" rows="10" required="required"></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto" required="required" ></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td><input type="text" name="tlp" maxlength="13" minlength="12" required="required" ></td>
            </tr>
        </table>
        <br>
        <button class="btn" type="submit" name="simpan">Tambah</button>
        </div>
    </form>
    <?php
    include '../koneksi.php';
    if(isset($_POST['simpan'])){
        $path = "../img/" . hash("sha256", rand(0, 1000) . $_FILES["foto"]["name"]) . pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $path);

        mysqli_query($conn, "INSERT INTO pengaduan SET
        tgl_pengaduan = '$_POST[tgl]',
        nik = '$_POST[nik]',
        isi_laporan = '$_POST[isi]',
        foto = '$path',
        tlp = '$_POST[tlp]'
        ");
        
         echo"<script>alert('Data Berhasil Ditambahkan'); window.location.assign('index.php');
         </script>";
 

    }
    ?>
</body>
</html>