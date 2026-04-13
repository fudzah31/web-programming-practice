<?php 
include 'koneksi.php';
$cari = isset($_GET['cari']) ? $_GET['cari'] : "";
$data = mysqli_query($koneksi, "SELECT * FROM karyawan
WHERE nip LIKE '%$cari%' OR nama LIKE '%$cari%'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi Data Pegawai</title>
</head>
<body>
    <h2>Data Pegawai</h2>
    <br><br>
   
    <div class="container">
         <a href="tambah.php">Tambah data</a>
           <br><br>
           <div class="search-box">
            <form method="get">
            <input type="text" name="cari" placeholder="Cari pegawai ..." value="<?php echo $cari; ?>">
            <input type="submit" value="Cari">
            <br><br>
            </form>
           </div>
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Golongan</th>
                    <th>Tanggal Lahir</th>
                    <th>Gaji Pokok</th>
                    <th>Keahlian</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no =1;
                while($row = mysqli_fetch_assoc($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['jk']; ?></td>
                        <td><?php echo $row['golongan']; ?></td>
                        <td><?php echo $row['tgl_lahir']; ?></td>
                        <td>Rp <?php echo number_format($row['gaji_pokok']); ?> </td>
                        <td><?php echo $row['keahlian']; ?></td>
                        <td>
                            <a href="edit.php?nip=<?php echo $row['nip']; ?>">Edit</a> |
                            <a href="hapus.php?nip=<?php echo $row['nip']?>" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                        </td>
                    </tr>

              <?php  } ?>
            </tbody>
        </table>

    </div>
</body>
</html>