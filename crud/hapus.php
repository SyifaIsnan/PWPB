<?php 
require "functions.php";

$nis = $_GET['nis'];

$query = "DELETE FROM siswa01 WHERE nis='$nis'";
$result = mysqli_query($conn, $query);

require "index.php";
?>