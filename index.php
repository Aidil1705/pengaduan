<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .gambar{
            position: relative;
            top: -100px;
            height: 100vh;
        }
        .container{
            position: absolute;
            margin-top:-500px;
            color:white;
            font-family: Calibri;
            text-align:center;
            margin-left:100px;
        }
        .h{
            font-family:arial !important;
        }
        h1{
            margin-top:25px;
            font-family:arial;
            font-size :25px;
            color:white;
            
        }
        .footer{
            position:absolute;
            margin-top:-105px;
            width: 100%;
            height:150px;
            background-color:#475657c6;
        }
        h4{
            color:white;
            margin-left:25px;
        }
    </style>
    <title>Pengaduan Masyarakat</title>
</head>
<body>
<?php
    include 'header.php';
    ?>
    <img class="gambar" src="img/bg4.jpg" width="100%">
    <br>
    <div class="container">
        <h2> <span class="h"> Selamat Datang Di Website Pengaduan Masyarakat Kota Bandar Lampung </span><br>Layanan Aspirasi dan Pengaduan Online Rakyat </h2>
    </div>
    <div class="footer">
    <center>
        <h1>
            Banyak Pengaduan
            <br>
            <?php
            include 'koneksi.php';
            $qry= mysqli_query($conn, "SELECT * FROM pengaduan");
            $banyak = mysqli_num_rows($qry);
            echo ""  .mysqli_num_rows($qry)."";
            ?>
        </h1>
    </center>
    <br>
    <h4>sukajawa@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;0812-2412-4145</h4>
    </div>
</body>
</html>