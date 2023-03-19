<?php
    session_start();
    include "koneksi.php";

    if(isset($_POST['masuk'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $qry = mysqli_query($conn, "SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($qry) > 0){
        

        $data = mysqli_fetch_assoc($qry);
        if($data['username']=="$username"){
            $_SESSION['username'] = $username;
            $_SESSION['nik'] = $data['nik'];
            header("location:masyarakat/index.php");
        }
        }else{
            echo"<script>alert('Maaf Login Gagal, Silahkan ulangi Lagi'); window.location.assign('login-masyarakat.php');
            </script>";
        }
    
}
?>
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
        .box{
            width : 350px;
            height : 500px;
            box-shadow : 1px 1px 1px 1px;
            border-radius : 20px;
            background-color : white;
            margin-top : 25px;
        }
        .box img{
            padding-bottom : 50px;
        }
        .box input{
            border-radius : 5px;
        }
        .box p{
            margin-top:75px;
        }
        .box tr{
            padding-top:20px;
        }
        .tombol {
            background-color: #ffffff;
            color: black;
            border: 2px solid #FF0000;
            padding-left: 15px;
            padding-right: 15px;
            right: 0;
            margin-left : -175px;
            margin-top:25px;
            height: 30px;
        }
        .tombol:hover{
            background-color: #FF0000 ;
            color: white;
            transition : 0.4s;
        }
        h1{
            position:relative;
            margin-top:75px;
            color:white;
            font-family: Arial; 
            
        }
        .btn2{
            background-color: #ffffff;
            color: black;
            border: 2px solid #FF0000;
            padding-left: 15px;
            padding-right: 15px;
            height: 50px;
        }
        .btn2:hover{
            background-color: #FF0000 ;
            color: white;
            transition : 0.4s;
            border:2px solid white;
        }
        input{
            height: 25px;
            width:250px;
            border:2px solid red;
        }
    </style>
    <title>Log In</title>
</head>
<body>
    

    <center>
        <h1>Silahkan Login</h1>
    <div class="box">

        <br>
        <img src="img/profil.jpg" alt="" width="125px" height="125px" >
        
    <table>
    <form action="" method="POST">
        <tr>
            <td><input type="text" name="username" placeholder="Masukkan Nama"></td>
        </tr>
        <tr><td><input type="password" name="password" placeholder="Masukkan Password"></td></tr>
    </table>
    <br>
        <button class="tombol" name="masuk">Log In</button>
    
    </form>
    <p>Belum punya akun? <br><a href="register-masyarakat.php">Daftar Disini</a></p>
    </div>
    <br>
    <a href="index.php"><button class="btn2">Kembali Ke Halaman Depan</button></a>
    </center>
</body>
</html>