<?php 
require "functions.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

$query = "INSERT INTO siswa01 VALUES ('$nis', '$nama','$nilai')";
$result = mysqli_query($conn, $query);

require "index.php";
?>