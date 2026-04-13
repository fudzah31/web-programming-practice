<?php 
include 'koneksi.php';
if(isset($_POST['submit'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $golongan = $_POST['golongan'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $keahlian = isset($_POST['keahlian']) ? implode(",", $_POST['keahlian']) : "";

    mysqli_query($koneksi, "INSERT INTO karyawan (nip, nama, jk, golongan, tgl_lahir, gaji_pokok, keahlian)
    VALUES ('$nip', '$nama', '$jk', '$golongan', '$tgl_lahir', '$gaji_pokok', '$keahlian')
    ");
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <div class="box">
        <form method="post">
        Nip :
        <input type="text" name="nip" required>
        <br><br>
        Nama :
        <input type="text" name="nama" required>
        <br><br>
        Jenis Kelamin : <br>
        <label>
            <input type="radio" name="jk" value="L"> Laki-Laki
        </label>
        <label>
            <input type="radio" name="jk" value="L"> Perempuan
        </label>
        <br><br>
        Golongan : 
        <select name="golongan">
            <option value="">--- Pilih ---</option>
            <option value="I/A">I/A</option>
            <option value="I/B">I/B</option>
        </select>
        <br><br>
        Tanggal Lahir :
        <input type="date" name="tgl_lahit" required>
        <br><br>
        Gaji Pokok : 
        <input type="number" name="gaji_pokok" required>
        <br><br>
        Keahlian : <br>
        <label >
            <input type="checkbox" name="keahlian[]" value="Excel"> Excel
        </label> <br>
        <label >
            <input type="checkbox" name="keahlian[]" value="Word"> Word
        </label> <br>
        <label >
            <input type="checkbox" name="keahlian[]" value="PPT"> PPT
        </label> <br> <br>
        <button type="submit" name="submit">SIMPAN</button>
        </form>
    </div>
</body>
</html>