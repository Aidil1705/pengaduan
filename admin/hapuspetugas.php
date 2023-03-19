<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas='$id'")or die(mysqli_error());
 
echo"<script>alert('Data Berhasil Dihapus'); window.location.assign('data_pengguna.php');
            </script>";
?>