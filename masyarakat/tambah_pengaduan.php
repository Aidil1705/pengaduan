<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pengaduan</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #ff1a1a, #990000);
      color: white;
      position: relative;
      overflow-x: hidden;
    }

    /* Pola kotak */
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
      position: relative;
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 2;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 15px;
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

    /* Navbar */
    nav {
      display: flex;
      align-items: center;
      gap: 30px;
      z-index: 2;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      font-size: 1rem;
      transition: color 0.3s ease;
      padding: 8px 0;
      border-bottom: 1px solid transparent;
      transition: 0.3s;
    }

    nav a:hover {
      color: white;
      border-bottom: 1px solid white;
    }

    nav a.active {
      font-weight: 600;
    }

    /* Tombol Logout */
    .logout-btn {
      padding: 8px 24px;
      background: rgba(255,255,255,0.2);
      color: white;
      border: 2px solid white;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .logout-btn:hover {
      background: white;
      color: #990000;
    }

    /* Judul Halaman */
    .page-title {
      text-align: center;
      margin: 30px 0 20px 0;
      font-size: 2rem;
      font-weight: 600;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
      position: relative;
      z-index: 2;
    }

    /* Form Container */
    .form-container {
      max-width: 700px;
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(10px);
      margin: 0 auto 50px auto;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.4);
      position: relative;
      z-index: 2;
    }

    form label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
    }

    form input[type="text"],
    form textarea,
    form input[type="file"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 15px;
      border: none;
      border-radius: 6px;
      outline: none;
      background: rgba(255,255,255,0.9);
      color: #333;
      font-size: 1rem;
    }

    form input[readonly] {
      background: rgba(255,255,255,0.7);
      color: #555;
      cursor: not-allowed;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    .btn {
      display: inline-block;
      width: 100%;
      text-align: center;
      padding: 12px 0;
      font-size: 1rem;
      font-weight: 600;
      color: #990000;
      background-color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .btn:hover {
      background-color: #cc0000;
      color: white;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 15px;
        padding: 15px 20px;
      }

      nav {
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
      }

      .form-container {
        padding: 20px;
      }

      .page-title {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <!-- Header dengan Navbar -->
  <header>
    <div class="brand">
      <img src="../img/logo-bandarlampung.png" alt="Logo Kota Bandar Lampung">
      <div class="judul-website">
        Sistem Pengaduan Masyarakat<br>
        Kota Bandar Lampung
      </div>
    </div>
    <nav>
      <a href="index.php" class="active">Laporan Saya</a>
      <a href="login-masyarakat.php" class="logout-btn">Logout</a>
    </nav>
  </header>

  <!-- Judul -->
  <div class="page-title">
    Tambah Pengaduan
  </div>

  <!-- Form Tambah Pengaduan -->
  <div class="form-container">
    <form action="#" method="post" enctype="multipart/form-data">
      <label for="tgl">Tanggal Pengaduan</label>
      <input type="text" id="tgl" name="tgl" value="2025-11-05 (22:00:00)" readonly>

      <label for="nik">NIK</label>
      <input type="text" id="nik" name="nik" value="1234567890" readonly>

      <label for="tlp">No Telepon</label>
      <input type="text" id="tlp" name="tlp" maxlength="13" minlength="12" placeholder="08xxxxxxxxxx" required>

      <label for="isi">Isi Laporan</label>
      <textarea id="isi" name="isi" placeholder="Tuliskan laporan di sini..." required></textarea>

      <label for="foto">Upload Foto</label>
      <input type="file" id="foto" name="foto" required>

      <button type="submit" class="btn">Kirim Pengaduan</button>
    </form>
  </div>

</body>
</html>
