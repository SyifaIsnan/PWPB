<?php

require "../public/functions.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$n_mtk = $_POST['n_mtk'];

$query = "UPDATE siswa SET nama='$nama', n_mtk= $n_mtk WHERE id=$id";
$result = mysqli_query($conn, $query);

require "../app/index.php";
?>