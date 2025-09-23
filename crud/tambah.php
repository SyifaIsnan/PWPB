<?php

require "functions.php";
$query = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="prosesedit.php" method="get">
        <input type="hidden" name="nis" id="">

        <label for="nama">nama</label>
        <input type="text" name="nama" id=""> <br> <br>

        <label for="nilai">nilai</label>
        <input type="number" name="nilai" id=""> <br> <br>

        <button type="submit">KIRIM</button>
    </form>
</body>
</html>
