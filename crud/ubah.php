<?php

require "functions.php";
$nis = $_GET['nis'];  //dapet dari index
$query = "SELECT * FROM siswa01 where nis = '$nis'";
$result = mysqli_query($conn, $query);
$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}

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
    <?php foreach($rows as $baris):?>
        <form action="prosesubah.php" method="post">
        <input type="hidden" name="nis" id="" value="<?= $baris['nis']?>">

        <label for="nama">nama</label>
        <input type="text" name="nama" id="" value="<?= $baris['nama']?>"> <br> <br>

        <label for="nilai">nilai</label>
        <input type="number" name="nilai" id="" value="<?= $baris['nilai']?>"> <br> <br>

        <button type="submit">KIRIM</button>
    </form>

    <?php endforeach ?>
</body>
</html>
