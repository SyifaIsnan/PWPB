<?php
include "koneksi.php" ;

$query = mysqli_query($conn, "SELECT * FROM siswa01");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table Nilai</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>NILAI</th>
        </tr>
        
        <?php
        $i = 1;
        while($result = mysqli_fetch_assoc($query)):?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $result["nis"]; ?></td>
            <td><?= $result["nama"]; ?></td>
            <td><?= $result["nilai"]; ?></td>
        </tr>

        <?php endwhile; ?>
    </table>
</body>
</html>
