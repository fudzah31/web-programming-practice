<?php
include 'koneksi.php';
$kelas = mysqli_query($conn, "SELECT * FROM kelass");
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswas WHERE id_siswa='$id'");
$row = mysqli_fetch_assoc($data);
if(isset($_POST['submit'])){
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$id_kelas = $_POST['id_kelas'];
$nama_file = $_FILES['file']['name'];
$tmp_file = $_FILES['file']['tmp_name'];
if($nama_file != ""){
move_uploaded_file($tmp_file, "upload/".$nama_file);
mysqli_query($conn,"UPDATE siswas SET 
nama='$nama',
jk='$jk',
id_kelas='$id_kelas',
file='$nama_file'
WHERE id_siswa='$id'");
}else{
mysqli_query($conn,"UPDATE siswas SET 
nama='$nama',
jk='$jk',
id_kelas='$id_kelas'
WHERE id_siswa='$id'");
}
header("Location:index.php");
}
?>
<h2>EDIT SISWA</h2>
<form method="POST" enctype="multipart/form-data">
Nama :
<input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
<br><br>
Jenis Kelamin :
<select name="jk">
<option value="Laki-Laki"
<?php if($row['jk']=="Laki-Laki") echo "selected"; ?>>
Laki-Laki
</option>
<option value="Perempuan"
<?php if($row['jk']=="Perempuan") echo "selected"; ?>>
Perempuan
</option>
</select>
<br><br>
Kelas :
<select name="id_kelas">
<?php while($k=mysqli_fetch_assoc($kelas)){ ?>
<option value="<?php echo $k['id_kelas']; ?>"
<?php if($row['id_kelas']==$k['id_kelas']) echo "selected"; ?>>
<?php echo $k['nama_kelas']; ?>
</option>
<?php } ?>
</select>
<br><br>
File Lama :
<?php 
if(!empty($row['file'])){
?>
<a href="upload/<?php echo $row['file']; ?>">Lihat File</a>
<?php
}else{
echo "Tidak ada file";
}
?>
<br><br>
Ganti File :
<input type="file" name="file">
<br><br>
<button type="submit" name="submit">UBAH</button>
</form>