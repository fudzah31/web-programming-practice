<h2>Latihan Nested If</h2>
<form method="post">
    Nilai :
    <input type="number" name="nilai"> <br><br>
    Umur : 
    <input type="number" name="umur"><br><br>
    <button type="submit">Proses</button>
</form>
<?php
if (isset($_POST['nilai']) && isset($_POST['umur'])) {
    $nilai = $_POST['nilai'];
    $umur = $_POST['umur'];
    if ($nilai >= 85){
        if ($umur >= 18){
            echo "Nilai A, Dewasa";
        }else {
            echo "Nilai A, Anak-anak";
        }
    }elseif ($nilai >= 65){
        if ($umur >= 18){
            echo "Nilai B, Dewasa";
        }else {
            echo "Nilai B, Anak-anak";
        }
    }
}
?>