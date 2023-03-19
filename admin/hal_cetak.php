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
    <table align="center">
            <form target="_blank" action="cetak_pengaduan.php" method="post">
                <td><i class="fa fa-print" style="color:black;"></i></td>
                <td><input type="date" name="tgl1" class="form_input2" required></td>
                <td>s/d</td>
                <td><input type="date" name="tgl2" class="form_input2" required></td>
                <td><button type="submit" class="btn btn-success" name="simpan"
                        style="float:left; margin-right:25px;">Cetak</button></td>
            </form>
        </table>
    </center>
        <br>
    </div>
    
</body>
</html>