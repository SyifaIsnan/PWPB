<?php

$conn = mysqli_connect('localhost', 'root', '', 'xiirpl1');

function tambah($data){
    global $conn;
    $nama = $data['nama'];
    $query = "INSERT INTO fungsi VALUES ('', '$nama')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


$no = 1;

function tampil($query){
    global $conn;
    $query = "SELECT * FROM fungsi";
    $result = mysqli_query($conn, $query);
    $rows = [];
    
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function edit($data){
    global $conn;
    $id = $data['id'];
    $nama = $data['nama'];
    $query = "INSERT INTO fungsi VALUES ('', '$nama')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

   
?>