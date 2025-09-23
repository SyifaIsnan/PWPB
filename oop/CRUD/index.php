<?php
require "functions.php";

// Membuat instance dari class Database
$db = new Database();

// Proses form jika ada data yang dikirim
if (isset($_POST['submit'])) {
    $data = ['nama' => $_POST['nama']];
    $hasil = $db->tambah($data);
    if ($hasil > 0) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
    }
}

// Proses hapus data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $hasil = $db->hapus($id);
    if ($hasil > 0) {
        echo "<script>alert('Data berhasil dihapus!');</script>";
    }
}

// Mengambil semua data dari database
$dataFungsi = $db->tampil();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .form-container {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 400px;
        }
        input[type="text"], input[type="submit"] {
            padding: 8px;
            margin: 5px 0;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .btn-hapus {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }
        .btn-hapus:hover {
            text-decoration: underline;
        }
        .btn-edit {
            color: blue;
            text-decoration: none;
            font-weight: bold;
            margin-right: 10px;
        }
        .btn-edit:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Data Management System</h1>
    
    <!-- Form untuk menambah data -->
    <div class="form-container">
        <h3>Tambah Data Baru</h3>
        <form method="POST">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required><br>
            <input type="submit" name="submit" value="Tambah Data">
        </form>
    </div>

    <!-- Tabel untuk menampilkan data -->
    <h3>Data Fungsi</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($dataFungsi)): ?>
            <?php foreach ($dataFungsi as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn-edit">Edit</a>
                    <a href="?hapus=<?= $row['id'] ?>" 
                       onclick="return confirm('Yakin ingin menghapus data ini?')" 
                       class="btn-hapus">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </table>

    <p><strong>Total data:</strong> <?= count($dataFungsi) ?></p>
</body>
</html>