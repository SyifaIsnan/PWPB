<?php

include "koneksi.php";

$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

$query = "INSERT INTO siswa01 VALUES ('$nama','$nilai')";

?>