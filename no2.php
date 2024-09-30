<h1>Form Lembur</h1>
<form action="" method="post">
    <label for="jamKerja">Jam kerja : </label>
    <input type="number" name="jamKerja"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$jam = $_POST['jamKerja'];
$uanglembur = 50000;
if ($jam <= 8 && $jam>0) {
    echo "Anda tidak lembur, Jam kerja = $jam";
} else if ($jam >= 8) {
    $uanglemburlanjutan = ($jam - 9) * 25000;
    $total = $uanglembur + $uanglemburlanjutan;
    $totaljamlembur = $jam-8;
    echo "Jam kerja = $jam jam<br> ";
    echo "Jam lebih = $totaljamlembur jam <br>";
    echo "Uang lembur = Rp. $total <br>";
} else{
    echo "Mohon isi formulir jam kerja";
}
?>