<?php
require "konek.php";

// tambah data
if(isset($_POST["kirim"])){
    tambah($_POST);
}

// ambil semua data
$result = mysqli_query($conn, "SELECT * FROM fungsi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Sederhana</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border: 1px solid #999; padding: 8px; text-align: center; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h1>Form Tambah Data</h1>
    <form action="" method="post">
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama" required>
        <input type="submit" name="kirim" value="Kirim">
    </form>

    <h2>Data Tersimpan</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1; while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td>
                <a href="edit.php?id=<?=$fungsi['id']?>">Edit</a> |
              <a href="hapus.php?id=<?=$fungsi['id']?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>