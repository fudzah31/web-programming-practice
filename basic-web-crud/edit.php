<?php
include 'koneksi.php';
$kelas = mysqli_query($conn, "SELECT * FROM kelass");
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswas WHERE id_siswa='$id'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $id_kelas = $_POST['id_kelas'];

    mysqli_query($conn,"UPDATE siswas SET nama= '$nama', jk='$jk',
    id_kelas='$id_kelas' WHERE id_siswa='$id'");
    header("Location: index.php");
}
?>

<h2>EDIT SISWA</h2>
<form method="POST">
    Nama:
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
    Jenis Kelamin:
    <select name="jk">
    <option value="Laki-Laki"<?php if ($row['jk'] == 'Laki-Laki') echo 'selected' ?>>Laki-Laki</option>
     <option value="Perempuan"<?php if ($row['jk'] == 'Perempuan') echo 'selected' ?>>Perempuan</option>
    </select>
  <br>
    Kelas:
    <select name="id_kelas">
        <?php while ($k = mysqli_fetch_assoc($kelas)) { 
            ?>
            <option value="<?php echo $k['id_kelas']; ?>"
            <php if ($row['id_kelas'] == $k['id_kelas']) echo 'selected' ?>>
                <?php echo $k['nama_kelas']; ?>
            </option>
<?php } ?>
    </select>
    <br><br>
    <button type="submit" name="submit">Ubah</button>
</form>