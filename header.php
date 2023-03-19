<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>
<header id="header">
  <span class="title">
    <img src="img/logo-bandarlampung.png" width="50px">
  </span>
  <ul>
    <li><a href="login-petugas.php" >Login Petugas</a></a></li>
    <li><a href="login-masyarakat.php" >Login Masyarakat</a></a></li>
  </ul>
</header>

</body>
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("header").classList.remove('show');
    }
    else { document.getElementById("header").classList.add('show');
    }
    prevScrollpos = currentScrollPos;
    }
</script>
</html>