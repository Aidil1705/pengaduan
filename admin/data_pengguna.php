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
            <th>Nama petugas</th>
            <th>Username</th>
            <th>Passord</th>
            <th>No Telpon</th>
            <th>Level</th>
            <th>Action</th>
        </tr> 
        <?php
        include '../koneksi.php';
        session_start();
        $qry = mysqli_query($conn, "SELECT * FROM petugas");
        $no = 1;
        while($data = mysqli_fetch_array($qry)){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['nama_petugas']?></td>
            <td><?= $data['username']?></td>
            <td><?= $data['password']?></td>
            <td><?= $data['telp']?></td>
            <td><?= $data['level']?></td>
            <td><a href="editpetugas.php?id=<?=$data['id_petugas']?>">Edit</a>/
                <a href="hapuspetugas.php?id=<?=$data['id_petugas']?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
        
        
    </table>
    </center>
        <br>
        <a href="tambah_pengguna.php"><button class="btn">Tambah Pengguna</button></a>
    </div>
    
</body>
</html>