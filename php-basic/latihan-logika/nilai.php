<h2>Hitung Grade</h2>
<form method="post">
Nilai :
<input type="number" name="nilai">
<button type="submit">Proses</button>
</form>
<?php
if(isset($_POST['nilai'])){
$nilai = $_POST['nilai'];
if($nilai >= 90){
$grade = "A";
}
elseif($nilai >= 80){
$grade = "B";
}
elseif($nilai >= 70){
$grade = "C";
}
elseif($nilai >= 60){
$grade = "D";
}
else{
$grade = "E";
}
echo "Grade : ".$grade;
}
?>