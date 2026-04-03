<?php
include 'koneksi.php';
$kelas = mysqli_query($conn, "SELECT *FROM kelass");

if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $id_kelas = $_POST['id_kelas'];

    mysqli_query($conn, "INSERT INTO siswas (nama, jk, id_kelas) VALUES 
    ('$nama', '$jk', '$id_kelas')");
    header("Location:index.php");
}

?>

<form method="POST">
 Nama: <input type="text" name="nama" required><br>
 Jenis Kelamin : 
 <select name="jk" required>
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
 </select><br>
 Kelas : <select name="id_kelas" required>
    <?php while($k = mysqli_fetch_assoc($kelas)){
        ?>
        <option value="<?php echo $k['id_kelas']; ?>">
            <?php echo $k['nama_kelas']; ?>
        </option>
   <?php } ?>
 </select>
 <br><br>
 <button type="submit" name="submit">SIMPAN</button>
</form>
