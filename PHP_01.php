<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];

    if (isset($name) && !empty($name)) {
        if (!ctype_alpha($name)) {
            throw new Exception('Nama tidak boleh angka');
        } else {
            echo "Nama: $name <br>";
        }
    }

    if (isset($phone) && !empty($phone)) {
        if (!is_numeric($phone)) {
            throw new Exception('Nomor hp tidak boleh berupa huruf');
        } else {
            echo "Nomor HP: $phone <br>";
        }
    }

    if (
        isset($name) && !empty($name)
        && isset($phone) && !empty($phone)
        && isset($address) && !empty($address)
        && isset($sex) && !empty($sex)
    ) {
        echo "Nama: $name <br>";
        echo "Alamat: $address <br>";
        echo "Nomor HP: $phone <br>";
        echo "Jenis Kelamin: $sex <br>";
    } else {
        throw new Exception('Form tidak boleh kosong');
    }
}
?>

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
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="address">Alamat:</label>
        <input type="text" name="address" id="address">
        <br>
        <label for="phone">Nomor HP:</label>
        <input type="text" name="phone" id="phone">
        <br>
        <label for="sex">Jenis Kelamin:</label>
        <select name="sex" id="sex">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <Button name="submit" id="submit">Submit!</Button>
    </form>
</body>

</html>