<?php
require "koneksi.php";

$result = mysqli_query($conn, "SELECT * FROM fungsi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>

</head>
<body>


    <h2>Daftar Data</h2>
    <a href="tambahData.php">Tambah</a>
    <table border="1";>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php 
        $no = 1;
        while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($row['nama']); ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']?>" >Edit</a>
                <a href="hapus.php?id=<?= $row['id']?>" >Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>