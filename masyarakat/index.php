<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Masyarakat</title>
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
    border-bottom: 1px solid transparent; /* garis transparan dulu */
    transition: 0.3s; /* buat animasi halus */
    }

    nav a:hover {
    color: white;    ;
    border-bottom: 1px solid white; /* garis putih muncul saat hover */
    }

    nav a.active {
      font-weight: 600;
    }
    

    /* Logout Button */
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

    /* Table */
    .table-container {
      max-width: 1200px;
      margin: 0 auto 30px auto;
      overflow-x: auto;
      padding: 0 20px;
      position: relative;
      z-index: 2;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.4);
    }

    th, td {
      padding: 12px 15px;
      text-align: center;
      color: white;
    }

    th {
      background-color: rgba(0,0,0,0.3);
      font-weight: 600;
    }

    tr:nth-child(even) {
      background-color: rgba(255,255,255,0.05);
    }

    img.foto-laporan {
      width: 80px;
      height: 60px;
      object-fit: cover;
      border-radius: 5px;
    }

    .status {
      font-weight: bold;
      padding: 5px 10px;
      border-radius: 8px;
      display: inline-block;
    }

    .status.proses {
      background-color: rgba(255,255,255,0.3);
      color: white;
    }

    .status.selesai {
      background-color: white;
      color: #990000;
    }

    /* Link tanggapan */
    td a {
      color: white;
      text-decoration: none;
      border-bottom: 1px solid transparent;
      transition: 0.3s;
    }

    td a:hover {
      border-bottom: 1px solid white;
    }

    /* Tombol */
    .btn-container {
      text-align: center;
      margin: 20px 0 40px 0;
      position: relative;
      z-index: 2;
    }

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
    }

    .btn:hover {
      background-color: #cc0000;
      color: white;
    }

    /* Responsive */
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

      nav a {
        font-size: 0.9rem;
      }

      .page-title {
        font-size: 1.5rem;
      }

      table {
        font-size: 0.9rem;
      }

      th, td {
        padding: 8px 10px;
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
      <a href="../login-masyarakat" class="logout-btn">Logout</a>
    </nav>
  </header>

  <!-- Judul Halaman -->
  <div class="page-title">
    Laporan Pengaduan Saya
  </div>

  <!-- Tabel Data Pengaduan -->
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Pengaduan</th>
          <th>NIK</th>
          <th>Isi Laporan</th>
          <th>No Telp</th>
          <th>Foto</th>
          <th>Status</th>
          <th>Tanggapan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>05-11-2025</td>
          <td>1234567890</td>
          <td>Jalan rusak di depan rumah</td>
          <td>08123456789</td>
          <td><img src="../img/sample.jpg" alt="Foto Laporan" class="foto-laporan"></td>
          <td><span class="status proses">Proses</span></td>
          <td><a href="tanggapan.php?id=1">Lihat Tanggapan</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>04-11-2025</td>
          <td>0987654321</td>
          <td>Drainase tersumbat</td>
          <td>08234567890</td>
          <td><img src="../img/sample.jpg" alt="Foto Laporan" class="foto-laporan"></td>
          <td><span class="status selesai">Selesai</span></td>
          <td><a href="tanggapan.php?id=2">Lihat Tanggapan</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Tombol tambah pengaduan -->
  <div class="btn-container">
    <a href="tambah_pengaduan.php" class="btn">Tambah Pengaduan</a>
  </div>

</body>
</html>