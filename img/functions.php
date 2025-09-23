<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query):array{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
}

?>