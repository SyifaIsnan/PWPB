<?php 
require "functions.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

$query = "UPDATE siswa01 SET nama = '$nama', nilai = '$nilai' where nis = '$nis'";
$result = mysqli_query($conn, $query);

require "index.php";

?>