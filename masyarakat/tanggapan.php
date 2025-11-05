<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lihat Tanggapan</title>
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
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* Pola latar belakang */
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

    /* Header dan Navbar */
    header {
      width: 100%;
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

    nav {
      display: flex;
      align-items: center;
      gap: 30px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      font-size: 1rem;
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
      margin: 40px 0 20px 0;
      font-size: 2rem;
      font-weight: 600;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
      z-index: 2;
      position: relative;
    }

    /* Tabel */
    table {
      width: 90%;
      max-width: 900px;
      border-collapse: collapse;
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.4);
      margin-bottom: 40px;
      z-index: 2;
      position: relative;
    }

    th, td {
      padding: 14px 15px;
      text-align: center;
      color: white;
    }

    th {
      background-color: rgba(0,0,0,0.3);
      color: #ffcccc;
      text-transform: uppercase;
    }

    tr:nth-child(even) {
      background-color: rgba(255,255,255,0.05);
    }

    /* Tombol */
    .btn {
      display: inline-block;
      padding: 12px 30px;
      font-size: 16px;
      font-weight: 600;
      color: #990000;
      background-color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      z-index: 2;
      position: relative;
      margin-bottom: 50px;
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

      table {
        font-size: 0.9rem;
      }

      .page-title {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
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
      <a href="../login-masyarakat.php" class="logout-btn">Logout</a>
    </nav>
  </header>

  <!-- Judul Halaman -->
  <div class="page-title">Tanggapan Petugas</div>

  <!-- Tabel Tanggapan -->
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal Tanggapan</th>
        <th>Isi Tanggapan</th>
        <th>Petugas</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>05-11-2025</td>
        <td>Terima kasih atas laporannya. Tim kami sudah mengunjungi lokasi dan sedang melakukan perbaikan jalan.</td>
        <td>Andi Pratama</td>
      </tr>
      <tr>
        <td>2</td>
        <td>06-11-2025</td>
        <td>Pekerjaan sudah selesai dilakukan. Jalan kini dapat dilalui dengan aman.</td>
        <td>Siti Rahma</td>
      </tr>
    </tbody>
  </table>

  <!-- Tombol kembali -->
  <a href="index.php" class="btn">Kembali ke Dashboard</a>

</body>
</html>
