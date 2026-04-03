<?php
include 'koneksi.php';
$id_kelas = $_GET['id_kelas'];
$data = mysqli_query($conn, "SELECT * FROM kelass WHERE id_kelas='$id_kelas'");
$row = mysqli_fetch_assoc($data);
if (isset($_POST['submit'])) {
    $nama_kelas = $_POST['nama_kelas'];
    mysqli_query($conn, "UPDATE kelass SET nama_kelas='$nama_kelas' WHERE id_kelas='$id_kelas'");
    header("Location: kelas.php");
}
?>

<h2>EDIT KELAS</h2>
<form method="POST">
    Nama Kelas:
    <input type="text " name="nama_kelas" value="<?php echo $row['nama_kelas']; ?>">
    <br><br>
    <button type="submit" name="submit">Ubah</button>
</form>