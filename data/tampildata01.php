<?php

$arrayassoc = [
    ["nama" => "Perdana",
    "jurusan" => "Teknik Informatika"
    ],

    ["nama" => "Secondary",
    "jurusan" => "Teknik Arsitektur"
    ],

    ["nama" => "Ternary",
    "jurusan" => "Teknik Farmasi"
    ],
];

$conn = mysqli_connect("localhost", "root", "", "xiirpl1");
$query = "SELECT nis, nama FROM siswa";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        
        <?php for($x = 0; $x < count($arrayassoc) ; $x++) {?>
        <tr>
            <td> <?= $x + 1 ;?></td>
            <td><?= $arrayassoc[$x]["nama"]; ?></td>
            <td><?= $arrayassoc[$x]["jurusan"]; ?></td>
        
        </tr>
       <?php } ?>
        
        
    </table>

    <table border="1">
        <tr>
            <td>no</td>
            <td>nis</td>
            <td>nama</td>
            <td>status</td>
        </tr>
        <?php
        $i = 1;
        while($row = mysqli_fetch_assoc($result)):?>

            <tr>
                <td><?= $i++ ?>. </td>
                <td><?= $row["nis"]?></td>
                <td><?= $row["nama"]?></td>
                <td>
                    <a href="update.php">Update ||</a> 
                    <a href="delete.php">Delete</a>
                </td>
            </tr>

        <?php endwhile ?>
    </table>
</body>
</html>