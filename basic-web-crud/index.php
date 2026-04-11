<?php
include 'koneksi.php';
$cari = isset($_GET['cari']) ? $_GET['cari'] : "";
$data = mysqli_query($conn, "
SELECT siswas.id_siswa, siswas.nama, siswas.jk, siswas.file, kelass.nama_kelas
FROM siswas
JOIN kelass ON siswas.id_kelas = kelass.id_kelas
WHERE siswas.nama LIKE '%$cari%'
");
?>

<h2>APLIKASI DATA SEKOLAH</h2>
<a href="kelas.php">DATA KELAS</a>|
<a href="index.php">DATA SISWA</a>
<br><br>

<form method="GET" action="">
    <input type="text" name="cari" placeholder="Cari nama siswa..." value="<?php echo $cari; ?>">
    <input type="submit" value="Cari">
</form>
<a href="tambah.php">Tambah Data</a>
<br><br>
<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>File</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no =1;
while ($row = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['jk']; ?></td>
    <td><?php echo $row['nama_kelas']; ?></td>
    <td>
        <?php
        if ($row['file']) {
            ?>
            <a href="upload/<?php echo $row['file']; ?>">Lihat File</a>
            <?php
        }else{
            echo "Tidak ada file";
        }
        ?>
    </td>
    <td>
        <a href="edit.php?id=<?php echo $row['id_siswa']; ?>">Edit</a>
        |
        <a href="hapus.php?id=<?php echo $row['id_siswa']; ?>"
        onclick="return confirm ('Yakin mau hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
