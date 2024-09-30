<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $list =[12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
    $Dewasa = 0;
    $Anak = 0;
    for ($i=0; $i < count($list);$i++){
        if ($list[$i] >= 17){
            $Dewasa ++;
        } else {
            $Anak ++;
        }
    }
    echo "List Usia : ";
    foreach ($list as $i => $value){
        echo $value;
        if ($i < (count($list) - 1)){
            echo ", ";
        }
    }
    echo "<br>";
    echo "Jumlah Kategori Dewasa : $Dewasa <br>";
    echo "Jumlah Kategori Anak : $Anak <br>";
    ?>
</body>
</html>