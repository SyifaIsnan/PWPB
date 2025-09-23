<?php

require "../public/functions.php";

$id = $_GET['id'];

$query = "DELETE FROM siswa WHERE id = $id";
$result = mysqli_query($conn, $query);

require "../app/index.php";

?>