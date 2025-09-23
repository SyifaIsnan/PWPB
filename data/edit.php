<?php

require "../public/functions.php";
$id = $_GET["id"];
$query = "SELECT * FROM siswa WHERE id = $id";
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
    <h1>Edit Data</h1>
    <form action="ubahData.php" method="post">
        <?php foreach($rows as $row):?>
        <input type="hidden" value="<?=$row["id"];?>" name="id">
        <label for="">Nama</label> <br>
        <input type="text" value="<?=$row["nama"];?>" name="nama" id="nama"> <br>
        <label for="">Nilai Matematika</label> <br>
        <input type="number" value="<?=$row["n_mtk"];?>" name="n_mtk" id="n_mtk"> <br>
        <button type="submit" name="ubah">Ubah Data</button>
        <?php endforeach ?>
    </form>
</body>
</html>