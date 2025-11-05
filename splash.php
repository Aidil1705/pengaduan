<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengaduan Masyarakat Kota Bandar Lampung</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #ff1a1a, #990000);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: #fff;
      position: relative;
      overflow: hidden;
    }

    body::before {
      content: "";
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(135deg, rgba(255,255,255,0.08) 25%, transparent 25%),
        linear-gradient(135deg, transparent 75%, rgba(0,0,0,0.1) 75%),
        linear-gradient(45deg, rgba(255,255,255,0.05) 25%, transparent 25%),
        linear-gradient(45deg, transparent 75%, rgba(0,0,0,0.08) 75%);
      background-size: 100px 100px;
      mix-blend-mode: overlay;
      z-index: 0;
      opacity: 0.8;
    }

    header {
      position: absolute;
      top: 20px;
      left: 40px;
      display: flex;
      align-items: center;
      gap: 10px;
      z-index: 2;
    }

    header img {
      width: 60px;
    }

    .content {
      text-align: center;
      z-index: 2;
      text-shadow: 1px 1px 5px rgba(0,0,0,0.4);
    }

    .content h1 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .content p {
      font-size: 1.1rem;
      margin-bottom: 35px;
    }

    .login-btn {
      padding: 12px 40px;
      font-size: 1rem;
      color: #e60000;
      background: #fff;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: 0.3s ease;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    .login-btn:hover {
      background: #cc0000;
      color: #fff;
      transform: scale(1.05);
    }

    footer {
      position: absolute;
      bottom: 20px;
      color: rgba(255,255,255,0.85);
      font-size: 0.85rem;
    }
  </style>
</head>
<body>
  <header>
    <img src="img/logo-bandarlampung.png" alt="Logo Kota Bandar Lampung">
  </header>

  <div class="content">
    <h1>Selamat Datang di Website Pengaduan Masyarakat<br>Kota Bandar Lampung</h1>
    <p>Layanan Aspirasi dan Pengaduan Online Rakyat</p>
    <button class="login-btn" onclick="location.href='login_masyarakat.php'">Login</button>
  </div>

  <footer>© 2025 Pemerintah Kota Bandar Lampung</footer>
</body>
</html>
