<?php

require "functions.php";
$conn = mysqli_connect("localhost", "root", "", "xiirpl1");

$siswa = tampil("SELECT * FROM siswa01");
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tampilan Data</h1>
    <a href="tambah.php"><button>Tambah Data</button></a><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai MTK</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($siswa as $baris) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $baris["nama"] ?></td>
            <td><?= $baris["nilai"] ?></td>
            <td>
                <a href="ubah.php?nis=<?=$baris["nis"]?>">edit ||</a>
                <a href="hapus.php?nis=<?=$baris["nis"]?>">hapus ||</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>