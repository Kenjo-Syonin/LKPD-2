<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data = array(80, 90, 75, 100, 85, 100, 66);
        $cari = 100;
        $jumlah = 0;
        foreach ($data as $value) {
            if ($value == $cari) {
                $jumlah++;
            }
        }
        echo "Jumlah angka $cari = $jumlah <br>";
        $jumlah = 0;
        for ($i = 0; $i < count($data); $i++){
            if ($data[$i] == $cari) {
                $jumlah++;
            }
        }
        echo "Jumlah angka $cari = $jumlah";
    ?>
</body>
</html>