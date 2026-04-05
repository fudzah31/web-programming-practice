<h2>Cek Hari</h2>
<form method="post">
    Hari:
    <input type="text" name="hari">
    <button type="submit">Cek</button>
</form>
<?php
if (isset($_POST['hari'])) {
    $hari = $_POST['hari'];
    switch ($hari){
        case "Senin":
            echo "Upacara bendera";
            break;
        case "Jumat":
            echo "Pramuka";
            break;
        case "Sabtu":
            echo "Libur";
            break;
        case "Minggu":
            echo "Libur";
            break;
        default:
            echo "Hari biasa";
    }
}
?>