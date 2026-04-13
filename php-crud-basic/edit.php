<?php
include 'koneksi.php';

$nip_lama = $_GET['nip'];
$data = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nip='$nip_lama'");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['submit'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $golongan = $_POST['golongan'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $keahlian = isset($_POST['keahlian']) ? implode(",", $_POST['keahlian']) : "";

    mysqli_query($koneksi, "UPDATE karyawan SET
    nip = '$nip',
    nama = '$nama',
    jk = '$jk',
    golongan = '$golongan',
    tgl_lahir = '$tgl_lahir',
    gaji_pokok = '$gaji_pokok',
    keahlian = '$keahlian' WHERE nip='$nip_lama'
    ");
    header("Location:index.php");
}
$keahlian = explode(",", $row['keahlian']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit data</h2> <br><br>
    <div class="box">
        <form method="post">
            Nip :
            <input type="text" name="nip" value="<?php echo $row['nip']; ?>"> 
            <br><br>
            Nama :
            <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
            <br><br>
            Jenis Kelamin : <br>
            <label>
                <input type="radio" name="jk" value="L"
                <?php if($row['jk']=="L") echo "checked"; ?>> Laki-Laki
            </label>
             <label>
                <input type="radio" name="jk" value="P"
                <?php if($row['jk']=="P") echo "checked"; ?>> Perempuan
            </label>
            <br><br>
            Golongan : 
            <select name="golongan" required>
                <option value="" <?php if($row['golongan']=="") echo "selected"; ?>>-- Pilih Data --</option>
                <option value="I/A" <?php if($row['golongan']=="I/A") echo "selected"; ?>>I/A</option>
                <option value="I/B" <?php if($row['golongan']=="I/B") echo "selected"; ?>>I/B</option>
            </select> <br><br>
            Tanggal Lahir :
            <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
            <br><br>
            Gaji Pokok : 
            <input type="number" name="gaji_pokok" value="<?php echo $row['gaji_pokok']; ?>">
            <br><br>
            Keahlian : <br>
           <label>
            <input type="checkbox" name="keahlian[]" value="Excel"
            <?php if(in_array("Excel", $keahlian)) echo "checked"; ?>> Excel
           </label> <br>
           <label>
            <input type="checkbox" name="keahlian[]" value="Word"
            <?php if(in_array("Word", $keahlian)) echo "checked"; ?>> Word
           </label> <br>
           <label>
            <input type="checkbox" name="keahlian[]" value="PPT"
            <?php if(in_array("PPT", $keahlian)) echo "checked"; ?>> PPT
           </label> <br> <br>
           <button type="submit" name="submit">Ubah</button>
        </form>
    </div>
</body>
</html>