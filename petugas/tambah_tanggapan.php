<?php
include '../koneksi.php';
$id = $_GET["id"];
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
    <title>Tambah Tanggapan</title>
</head>
<body>
<?php
    include "header.php";
    ?>
    <img class="gambar" src="../img/bg4.jpg" width="100%">
    
    <form action="" method="post">
        <div class="tes">
            <h2>Silahkan Tanggapi Disini</h2>
        <table>
            <?php
                $tess=mysqli_query($conn, "SELECT * FROM pengaduan");
                while($tes=mysqli_fetch_array($tess)){
                    ?>
            <tr>
                <td><?= $tes['isi_laporan']?></td>
                <td><input type="radio" name="status" value="proses">Proses <input type="radio" name="status" value="selesai">Selesai  <input type="radio" name="status" value="ditolak">Ditolak </td>

            </tr>
            <?php } ?>
            <tr>
                
                <td>Tanggal Tanggapan</td>
                <td>
                <input type="text" name="tgl" required="required" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d (H:i:s)') ?>" readonly>
                <input type="hidden" name="id_pengaduan" value=" <?= $id?>">
                <input type="hidden" name="id_petugas" value="<?= $_SESSION['id_petugas']?>" required="required" >
                </td>
            </tr>
            <tr>
                <td>Tanggapan</td>
                <td><textarea name="tanggapan" id="" cols="30" rows="10" required="required"></textarea></td>
            </tr>

        </table>
        <br>
        <button class="btn" type="submit" name="simpan">Beri Tanggapan</button>
        </div>
    </form>
    <?php
    if(isset($_POST['simpan'])){
        $id_pengaduan = $_POST['id_pengaduan'];
        $tgl = $_POST['tgl'];
        $id_petugas = $_POST['id_petugas'];
        $tanggapan = $_POST['tanggapan'];
        $status = $_POST['status'];
        mysqli_query($conn,"INSERT INTO `tanggapan` ( `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES ( '$id_pengaduan', '$tgl', '$tanggapan', '$id_petugas')");
        mysqli_query($conn,"UPDATE `pengaduan` SET `status` = '$status' WHERE `pengaduan`.`id_pengaduan` = '$id';");
         echo"<script>alert('Data Berhasil Ditambahkan'); window.location.assign('index.php');
         </script>";

    }
    ?>
</body>
</html>