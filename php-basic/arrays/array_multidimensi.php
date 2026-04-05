<h2>Latihan Array Multidimensi</h2>
<?php
$siswa = [
    ["nama" => "Nana",
    "kelas" => "XI RPL",
    "umur" => 16],
    ["nama" => "Salsa",
    "kelas" => "XII RPL",
    "umur" => 17],
    ["nama" => "Amel",
    "kelas" => "X RPL",
    "umur" => 15]
];
foreach($siswa as $s){
    echo "Nama : ".$s["nama"]."<br>";
    echo "Kelas : ".$s["kelas"]."<br>";
    echo "Umur : ".$s["umur"]."<br><br>";
}
?>