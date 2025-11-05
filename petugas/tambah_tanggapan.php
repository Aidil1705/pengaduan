<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beri Tanggapan</title>
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
      border-bottom: 1px solid white;
      color: #ffcccc;
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

    .page-title {
      text-align: center;
      margin: 40px 0 20px 0;
      font-size: 2rem;
      font-weight: 600;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
      z-index: 2;
      position: relative;
    }

    .form-container {
      width: 90%;
      max-width: 800px;
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.4);
      color: white;
      z-index: 2;
      position: relative;
      margin-bottom: 40px;
    }

    .form-container table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 10px;
      vertical-align: top;
    }

    textarea, input[type="text"] {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: none;
      outline: none;
      font-size: 1rem;
    }

    textarea {
      height: 120px;
      resize: none;
    }

    .status-options input {
      margin-right: 5px;
    }

    .btn {
      display: inline-block;
      background: white;
      color: #990000;
      border: none;
      border-radius: 8px;
      padding: 12px 30px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      margin-top: 20px;
    }

    .btn:hover {
      background-color: #cc0000;
      color: white;
    }

    @media (max-width: 768px) {
      .form-container {
        padding: 20px;
      }
      .page-title {
        font-size: 1.6rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="brand">
      <img src="../img/logo-bandarlampung.png" alt="Logo Kota Bandar Lampung">
      <div class="judul-website">
        Sistem Pengaduan Masyarakat<br>
        Kota Bandar Lampung
      </div>
    </div>
    <nav>
      <a href="index.php" class="active">Daftar Pengaduan</a>
      <a href="../login-petugas.php" class="logout-btn">Logout</a>
    </nav>
  </header>

  <div class="page-title">Beri Tanggapan</div>

  <div class="form-container">
    <form>
      <table>
        <tr>
          <td colspan="2"><strong>Laporan:</strong> Jalan di Kelurahan Sukarame rusak parah dan sulit dilalui kendaraan roda dua.</td>
        </tr>
        <tr>
          <td style="width: 30%;"><strong>Status</strong></td>
          <td class="status-options">
            <input type="radio" name="status" value="proses"> Proses 
            <input type="radio" name="status" value="selesai"> Selesai  
            <input type="radio" name="status" value="ditolak"> Ditolak
          </td>
        </tr>
        <tr>
          <td><strong>Tanggal Tanggapan</strong></td>
          <td><input type="text" value="05-11-2025 (14:32:00)" readonly></td>
        </tr>
        <tr>
          <td><strong>Tanggapan</strong></td>
          <td><textarea placeholder="Tuliskan tanggapan di sini..."></textarea></td>
        </tr>
      </table>

      <button type="submit" class="btn">Kirim Tanggapan</button>
    </form>
  </div>

</body>
</html>
