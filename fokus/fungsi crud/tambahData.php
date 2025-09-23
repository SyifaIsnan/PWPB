<?php

$conn = mysqli_connect("localhost", "root", "", "xiirpl1");

require "tambah.php";


if(isset($_GET['btnKirim'])){
    global $conn;
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $query = "INSERT INTO crud01 VALUES ("", "$nama", "$alamat")";
    mysqli_query($conn, $query);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="post" >
    <label for="name">NAMA</label> <br>
    <input type="text" name="nama" id="name" class="border border-success"> <br> <br>
    <label for="alamat">Alamat</label> <br>
    <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea> <br> <br>
    <!-- <input type="submit" name="tombol01" value="submit" class="btn btn-warning"> -->
    <button name="btnKirim" class="btn btn-primary">Kirim</button>
    </form>
</body>
</html>