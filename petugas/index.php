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
            <th>Tanggal pengaduan</th>
            <th>Isi Laporan</th>
            <th>No Telpon</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Beri Tanggapan</th>
        </tr> 
        <?php
        include '../koneksi.php';
        session_start();
        $qry = mysqli_query($conn, "SELECT * FROM pengaduan");
        $no = 1;
        while($data = mysqli_fetch_array($qry)){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['tgl_pengaduan']?></td>
            <td><?= $data['isi_laporan']?></td>
            <td><?= $data['tlp']?></td>
            <td><img src="<?= $data['foto']?>" width="100px"></td>
            <td><?= $data['status']?></td>
            <td><a href="tambah_tanggapan.php?id=<?= $data['id_pengaduan']?>"> Beri Tanggapan</a></td>
        </tr>
        <?php } ?>
        
        
    </table>
    </center>
        <br>
        <a href="tambah_pengaduan.php"><button class="btn">Tambah Pengaduan</button></a>
    </div>
    
</body>
</html>