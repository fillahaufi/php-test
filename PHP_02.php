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
        <Button onclick="submitForm()" name="submit" id="submit">Submit!</Button>
    </form>
</body>

<script>
    function submitForm() {
        var formData = new FormData(document.getElementById("myForm"));
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xhttp.open("POST", "PHP_01.php", true);
        xhttp.send(formData);
    }
</script>

</html>