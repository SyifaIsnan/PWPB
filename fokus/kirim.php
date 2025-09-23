<?php
error_reporting(0);
require "tombol.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <h1>Mengisi Data</h1>
    <form action="" method="get" >
    <label for="name">NAMA</label> <br>
    <input type="text" name="name01" id="name" class="border border-success"> <br> <br>
    <label for="alamat">Alamat</label> <br>
    <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea> <br> <br>
    <input type="submit" name="tombol01" value="submit" class="btn btn-warning">
    <button name="btnKirim" class="btn btn-primary">Kirim</button>
    </form>
</body>
</html>

<?= "Namanya : $nama dan alamatnya : $alamat"
?>