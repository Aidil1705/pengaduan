<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color:#FF0000;
        }
        .container{
            width : 350px;
            height : 500px;
            box-shadow : 1px 1px 1px 1px;
            border-radius : 20px;
            background-color : white;
        }
        h1{
            margin-top:50px;
            color:white;
            font-family :arial;
        }
        .isi{
            padding-bottom:20px;
        }
        .isi input{
            border-top:none !important;
            border-left:none !important;
            border-right:none !important;
            border: 2px solid black;
            margin-left:0 !important;
        }
        .btn2{
            background-color: #ffffff;
            color: black;
            border: 2px solid #FF0000;
            padding-left: 15px;
            padding-right: 15px;
            height: 25px;
        }
        .btn2:hover{
            background-color: #FF0000 ;
            color: white;
            transition : 0.4s;
            border:2px solid white;
        }
    </style>
    <title>Register-Petugas</title>
</head>
<body>
    <center>
        <h1>Silahkan Daftar Disini</h1>
    <div class="container">
        <br>
        <br>
        <br>
        <form action="" method="post">
        <div class="isi">
              <input type="text" name="nik" minlength="16" maxlength="16" placeholder=" NIK Minimal 16 Karakter" required="required">
        </div>
        <div class="isi">
              <input type="text" name="nama" placeholder="Nama" required="required">
        </div>
        <div class="isi">
              <input type="text" name="alamat" placeholder="Alamat" required="required">
        </div>
        <div class="isi">
              <input type="text" name="tlp" minlength="12" maxlength="13" placeholder="No Telpon 12-13 karakter" required="required">
        </div>
        <div class="isi">
              <input type="text" name="username" placeholder="Username" required="required">
        </div>
        <div class="isi">
              <input type="text" name="password" placeholder="Password" required="required">
        </div>
        <button type="submit" class="btn2" name="tambah">Daftar</button>
    </div>
    
    </form>
    </center>
    <?php
    include 'koneksi.php';
    if(isset($_POST['tambah'])){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tlp = $_POST['tlp'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        mysqli_query($conn, "INSERT INTO `masyarakat` (`nik`, `nama`, `alamat`, `username`, `password`, `telp`) VALUES ('$nik', '$nama', '$alamat', '$username', '$password', '$tlp');");
        echo"<script>alert('Data Berhasil Ditambahkan'); window.location.assign('login-masyarakat.php');
            </script>";
    }
    ?>
</body>
</html>