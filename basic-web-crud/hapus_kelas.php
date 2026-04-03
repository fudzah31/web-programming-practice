<?php
include 'koneksi.php';
$id_kelas = $_GET['id_kelas'];
mysqli_query($conn, "DELETE FROM kelass WHERE id_kelas='$id_kelas'");
header("Location: kelas.php");
?>