<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $nama_kelas = $_POST['nama_kelas'];
    mysqli_query($conn, "INSERT INTO kelass (nama_kelas) VALUE ('$nama_kelas')");
    header("Location: kelas.php");
}
?>

<h2>Tambah Kelas</h2>
<form method="POST">
    Nama Kelas:
    <input type="text" name="nama_kelas">
    <br><br>
    <button type="submit" name="submit">Simpan</button>
</form>