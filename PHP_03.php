<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    function reverse_string($str)
    {
        $result = '';
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $result .= $str[$i];
        }
        return $result;
    }

    if (
        isset($username) && !empty($username)
        && isset($password) && !empty($password)
    ) {
        // check if username is equal to password
        if ($username == reverse_string($password)) {
            echo "Username: $username <br>";
            echo "Password: $password <br>";
        } else {
            throw new Exception('Username dan password tidak sama');
        }
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
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <Button name="submit" id="submit">Login</Button>
    </form>
</body>

</html>