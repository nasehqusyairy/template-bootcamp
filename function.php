<?php
$nama = "Nanang";
$umur = 20;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($i = 0; $i < 10; $i++) {
        if ($umur % 2 == 0) {
            echo ("Hello Nunung <br><br>");
        } else {
            echo ("Hello $nama <br>Umur = $umur<br><br>");
        }
        $umur++;
    } ?>
</body>

</html>