<?php 
include 'koneksi.php';
$nip = $_GET['nip'];
mysqli_query($koneksi, "DELETE FROM karyawan WHERE nip='$nip'");
header("Location:index.php");
?>