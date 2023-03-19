<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Masyarakat</title>

</head>
<body>
    <?php
    include "header.php";
    ?>
    <img class="gambar" src="../img/bg4.jpg" width="100%">
    
    <div class="tes">
    <center>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Tanggal Tangapan</th>
            <th>Isi Tanggapan</th>
            <th>Petugas</th>
        </tr> 
        <?php
        include '../koneksi.php';
        session_start();
        $qry = mysqli_query($conn, "SELECT * FROM tanggapan, petugas WHERE tanggapan.id_petugas = petugas.id_petugas AND id_pengaduan = '$_GET[id]' ");
        $no = 1;
        while($data = mysqli_fetch_array($qry)){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['tgl_tanggapan']?></td>
            <td><?= $data['tanggapan']?></td>
            <td><?= $data['nama_petugas']?></td>
        </tr>
        <?php } ?>
        
        
    </table>
    </center>
        <br>
        <a href="tambah_pengaduan.php"><button class="btn">Tambah Pengaduan</button></a>
    </div>
    
</body>
</html>