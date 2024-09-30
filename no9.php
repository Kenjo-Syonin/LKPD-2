<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $uang = 148880;
    echo "Uang yang dimiliki adalah Rp. ". number_format($uang,0,",","."). "<br>";
    echo "Lembar Rupiah : <br>";
    // menghitung pecahan lembar uang rupiah. Beserta jumlah lembarnya lalu cetak
    $lembarnya = array(100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 20, 10);
    $hasil = array();
    echo "<ul>";
    for ($i = 0; $i < count($lembarnya); $i++){
        $hasil[$i] = floor($uang / $lembarnya[$i]);
        if ($hasil[$i] >= 1){
            echo "<li>Rp. ".number_format($lembarnya[$i],0,",","."). " : " . $hasil[$i]. "</li>";
        }
        $uang = $uang % $lembarnya[$i];
    }
    echo "</ul>";
    ?>
</body>
</html>