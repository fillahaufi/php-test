<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="number">
        <button name="submit" id="submit">Submit</button>
    </form>
</body>

</html>

<?php

function starPyramid($n)
{
    // for ($i = 0; $i < $n; $i++) {
    //     for ($j = 0; $j <= $i; $j++) {
    //         echo "* ";
    //     }
    //     echo "<br>";
    // }
    // // reverse pyramid
    for ($i = $n; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

if (isset($_POST['submit'])) {
    $number = $_POST['number'];

    if (isset($number) && !empty($number)) {
        if (!is_numeric($number)) {
            throw new Exception('Input harus berupa angka');
        } else {
            starPyramid($number);
        }
    }
}
