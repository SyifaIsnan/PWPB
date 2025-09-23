<?php

$conn = mysqli_connect("localhost", "root", "", "xiirpl1");
$query = "SELECT * FROM siswa";
$result = mysqli_query($conn, $query)



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
</head>
<body>
    <h1>Daftar Nilai TKA Matematika</h1>
    <br>
    <a href="tambah.php">Tambah Data Nilai</a>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Nilai Matematika</td>
            <td>Keterangan</td>
        </tr>

        <?php $no = 1; ?>
        <?php while($data = mysqli_fetch_assoc($result)) {?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data["nama"] ?></td>
            <td><?= $data["n_mtk"] ?></td>
            <td></td>
            
        </tr>
        <?php } ?>
        ?>
    </table>

</body>
</html>