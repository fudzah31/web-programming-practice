<?php
include 'koneksi.php';
$data = mysqli_query($conn, "
SELECT siswas.id_siswa, siswas.nama, siswas.jk, kelass.nama_kelas
FROM siswas
JOIN kelass ON siswas.id_kelas = kelass.id_kelas
");
?>

<h2>APLIKASI DATA SEKOLAH</h2>
<a href="kelas.php">DATA KELAS</a>|
<a href="index.php">DATA SISWA</a>
<br><br>
<a href="tambah.php">Tambah Data</a>
<br><br>
<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
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
        <a href="edit.php?id=<?php echo $row['id_siswa']; ?>">Edit</a>
        |
        <a href="hapus.php?id=<?php echo $row['id_siswa']; ?>"
        onclick="return confirm ('Yakin mau hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
