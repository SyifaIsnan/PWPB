<?php

$conn = mysqli_connect("localhost", "root", "", "xiirpl1");
$query = "SELECT * FROM siswa";
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
    <title>Data Table</title>
</head>
<body>
    <h1>Daftar Nilai TKA Matematika</h1>
    <br>
    <a href="../data/tambah.php">Tambah Data Nilai</a>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Nilai Matematika</td>
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>

        <?php $no = 1; ?>
        <?php foreach($rows as $row): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["n_mtk"] ?></td>
            
            <td>
                <?php  if($row["n_mtk"] < 50 ){ 
                        echo "Remidi";
                    } else{
                        echo "Lulus";
                    } 
                ?>
            </td>

            <td>
                 <a href="../data/edit.php?id=<?=$row["id"];?>">Edit ||</a> <!--itu pake .. supaya keluar dulu dari folder app -->
                <a href="../data/hapus.php?id=<?=$row["id"];?>">Hapus</a>
            </td>
            
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>