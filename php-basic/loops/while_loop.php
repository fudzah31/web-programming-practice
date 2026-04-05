<h2>Latihan While Loop</h2>
<form method="post">
    Jumlah Perulangan :
    <input type="number" name="angka">
    <button type="submit">Tampilkan</button>
</form>
<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $i = 1;
    while ($i <= $angka) {
        echo "Perulangan ke $i <br>";
        $i++;
    }
}
?>