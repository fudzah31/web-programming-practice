<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM siswas WHERE id_siswa='$id'");
header("Location: index.php");
?>