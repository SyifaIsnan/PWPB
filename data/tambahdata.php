<?php

require "../public/functions.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$n_mtk = $_POST['n_mtk'];

$tambah = "INSERT INTO siswa (nis, nama, n_mtk) VALUES ('$nis', '$nama', '$n_mtk')";
mysqli_query($conn, $tambah);


require "../app/index.php";

?>