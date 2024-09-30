<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="nama1">Nama 1</label>
        <input type="text" id="nama1" name="nama1" placeholder="Nama 1"><br>
        <label for="nama2">Nama 2</label>
        <input type="text" id="nama2" name="nama2" placeholder="Nama 2"><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Nama_1 = $_POST["nama1"];
        $Nama_2 = $_POST["nama2"];
        if ($Nama_1 !== '' || $Nama_2 !== '') {
            function validasiInput($input)
            {
                if (preg_match('/^[a-zA-Z][a-zA-Z\s]*$/', $input)) {
                    return true;
                } else {
                    return false;
                }
            }
            if (validasiInput($Nama_1) && validasiInput($Nama_2)) {
                $Nama1 = str_replace(' ', '', $Nama_1);
                $Nama2 = str_replace(' ', '', $Nama_2);
                if (strlen($Nama1) > strlen($Nama2)) {
                    $hasil = strlen($Nama1) - strlen($Nama2);
                    echo "$Nama_1 memiliki jumlah karaketer lebih banyak dari $Nama_2 : selisih $hasil karakter";
                } elseif (strlen($Nama1) < strlen($Nama2)) {
                    $hasil = strlen($Nama2) - strlen($Nama1);
                    echo "$Nama_2 memiliki jumlah karaketer lebih banyak dari $Nama_1 : selisih $hasil karakter";
                } else {
                    echo "Kedua nama memiliki jumlah karaketer yang sama yaitu : " . strlen($Nama1);
                }
                ;
            } else {
                echo "Nama harus berupa Huruf dan Spasi";
            }
        } else {
            echo "Nama tidak boleh kosong";
        }
    }
    ?>
</body>

</html>