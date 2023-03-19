<?php
session_start();
include '../koneksi.php';
if(!isset ($_SESSION['level'])){
	header ("location: index.php");
	}else{
?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>

    <style>
        @charset "utf-8";
        /* CSS Document */
        .tabel{
            margin-left:50px;
            }
        .kotak{
            padding: px 0px;
            }
        .titik{
            margin-left:60%;
            }


    </style>
    <link rel="icon" href="../img/lpg.png">
</head>

<body>
    <style type="text/css">
    .head {
        width: 100%;
        height: 100px;
        border-bottom: 1px solid;
    }
    </style>
    <div class="head">
        <table>
            <tr>
                <td width="10%"><img src="../img/logo-bandarlampung.png" width="70px" height="80px" /></td>
                <td align="center" width="90%">
                    <font style="font-size:22px; font-family:Arial, Helvetica, sans-serif;">PEMERINTAH KABUPATEN
                        LAMPUNG<br />Tanjung Karang Barat<br />sukajawa</font><br /><i>
                        <font style="font-size:13px;">Gg. Balai desa, Sukajawa, Kec. TKB, Kota Bandar
                            Lampung, Lampung 35141</font>
                        <br>
                        <br>
                    </i>
                </td>
            </tr>
        </table>
    </div><br /><br /><br>
    <div style="font-size:24px; text-align:center;">Laporan Pengaduan Masyarakat</div><br /><br />
   
    <table align="center" border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tgl Pengaduan</th>
            <th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
        </tr>
        <?php
$no = 1;
$query = mysqli_query ($conn, "SELECT * FROM pengaduan WHERE tgl_pengaduan >= '" .$_POST['tgl1']. "' AND tgl_pengaduan <= '" .$_POST['tgl2']. "'");
if (mysqli_num_rows ($query)){
while ($data = mysqli_fetch_array ($query)) {
?>
        <tr align="left">
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['tgl_pengaduan'] ?></td>
            <td><?php echo $data['nik'] ?></td>
            <td><?php echo $data['isi_laporan'] ?></td>
            <td><img src="<?= $data['foto']?>" width="100px"></td>
        </tr>
        <?php }}else{
	echo '<tr><td colspan="6" align="center">TIDAK ADA DATA</td></tr>';
}?>
    </table>

    <br />

    <table class="titik">
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;BandarLampung,......................<script>
                document.write(new Date().getFullYear());
                </script>
            </td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;KEPALA KELURAHAN</td>
        </tr>
    </table>

    <br /><br /><br /><br />
    <table class="titik">
        <tr>
            <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>. . . . . . . . . . . . . . . . . . .
                        . . .</u></b></td>
        </tr>
    </table>
    <script>
    window.print()
    </script>
</body>

</html>
<?php } ?>