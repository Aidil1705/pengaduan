<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Masyarakat</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #ff1a1a, #990000);
      color: white;
      position: relative;
      overflow: hidden;
    }

    /* Pattern kotak */
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
      opacity: 0.8;
      z-index: 0;
    }

    header {
      position: absolute;
      top: 20px;
      left: 40px;
      display: flex;
      align-items: center;
      gap: 15px;
      z-index: 2;
    }

    header img {
      width: 60px;
      height: auto;
    }

    .judul-website {
      font-weight: 600;
      font-size: 1.1rem;
      line-height: 1.3;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
    }

    .register-container {
      background: rgba(255,255,255,0.15);
      padding: 35px;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.4);
      backdrop-filter: blur(10px);
      width: 350px;
      text-align: center;
      z-index: 2;
    }

    h2 {
      margin-bottom: 25px;
      font-size: 1.6rem;
      letter-spacing: 1px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      border: none;
      margin: 8px 0;
      border-radius: 8px;
      outline: none;
      font-size: 0.95rem;
    }

    textarea {
      resize: none;
      height: 60px;
    }

    .btn {
      background: white;
      color: #e60000;
      border: none;
      padding: 10px 0;
      width: 100%;
      border-radius: 8px;
      font-weight: bold;
      margin-top: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background: #cc0000;
      color: #fff;
    }

    p {
      margin-top: 15px;
      font-size: 0.9rem;
    }

    a {
      color: white;
      text-decoration: none;
      border-bottom: 1px solid transparent;
      transition: 0.3s;
    }

    a:hover {
      border-bottom: 1px solid white;
    }

    footer {
      position: absolute;
      bottom: 20px;
      color: rgba(255,255,255,0.85);
      font-size: 0.85rem;
      z-index: 2;
    }
  </style>
</head>
<body>
  <header>
    <img src="img/logo-bandarlampung.png" alt="Logo Kota Bandar Lampung">
    <div class="judul-website">
      Sistem Pengaduan Masyarakat<br>
      Kota Bandar Lampung
    </div>
  </header>

  <div class="register-container">
    <h2>Registrasi</h2>
    <form action="proses_register.php" method="POST">
      <input type="text" name="nik" placeholder="NIK" required>
      <input type="text" name="nama" placeholder="Nama Lengkap" required>
      <textarea name="alamat" placeholder="Alamat Lengkap" required></textarea>
      <input type="text" name="tlp" placeholder="No. Telepon" required>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button class="btn" type="submit" name="tambah">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="login-masyarakat.php">Login di sini</a></p>
  </div>

  <footer>© 2025 Pemerintah Kota Bandar Lampung</footer>
</body>
</html>
