<h2> Latihan DO WHILE LOOP</h2>
<form method="post">
Jumlah :
<input type="number" name="angka">
<button type="submit">Proses</button>
</form>
<?php
if(isset($_POST['angka'])){
$i = 1;
$angka = $_POST['angka'];
do{
echo "Perulangan ke $i <br>";
$i++;
}
while($i <= $angka);
}
?>