<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM kelass");
?>
<h2>APLIKASI DATA SEKOLAH</h2>
<a href="kelas.php">DATA KELAS</a> |
<a href="index.php">DATA SISWA</a>
<br><br>
<a href="tambah_kelas.php">Tambah Kelas</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_kelas']; ?></td>
            <td>
                <a href="edit_kelas.php?id_kelas=<?php echo $row['id_kelas']; ?>">Edit</a>
                <a href="hapus_kelas.php?id_kelas=<?php echo $row['id_kelas']; ?>"
                onclick="return confirm('Yakin Mau Hapus?')">Hapus</a>
            </td>
        </tr>
   <?php } ?>
</table>