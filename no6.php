<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $student =[
        [
            'nama' => 'Andi',
            'nilai' => [80,78,82,78,88],
        ],
        [
            'nama' => 'Beni',
            'nilai' => [86,70,80,85,81],
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83,91,70,73,81],
        ],
        [
            'nama' => 'Eko',
            'nilai' => [89,85,84,86,88],
        ],
    ];
    echo "<ol>";
    foreach ($student as $siswa) {
        $rata = array_sum($siswa['nilai'])/count($siswa['nilai']);
        echo "<li>". $siswa['nama'].': '. $rata . "</li>";
    }
    echo "</ol>";
    ?>
</body>
</html>