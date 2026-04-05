<h2>Latihan If Else</h2>
<form method="post">
    Nilai : 
    <input type="number" name="nilai">
    <button type="submit">Cek Hasil</button>
</form>
<?php
if (isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];
    if ($nilai >= 85) {
        echo "Nilai A";
    } elseif ($nilai >= 65) {
        echo "Nilai B";
    } elseif ($nilai >= 50){
        echo "Nilai C";
    } else {
        echo "Nilai D";
    }
}
?>

