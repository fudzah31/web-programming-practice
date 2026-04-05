<h2>Latihan For Loop</h2>
<form method="post">
    Jumlah Perulangan :
    <input type="number" name="angka">
    <button type="submit">Tampilkan</button>
</form>
<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    for($i=1; $i <=$angka; $i++) {
        echo "Perulangan ke $i <br>";
    }
}
?>