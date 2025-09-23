<?php

require 'konek.php';

if(isset($_GET['kirim'])){
    tambah($_GET);
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
    <h1>Form Tambah Data</h1>

   <form action="" method="post">
     <table border="1">
        <tr>
            <td>No. </td>
            <td>Nama</td>
            <td>Aksi</td>
        </tr>

       <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row["nama"] ?></td>
            <td>
                <button type="submit" name="edit">Edit</button>
                <button type="submit" name="hapus">Hapust</button>
            </td>
        </tr>
    </table>
   </form>

    <form action="" method="get">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama"> <br> <br>
        <input type="submit" name="kirim" value="kirim">
    </form>
</body>
</html>