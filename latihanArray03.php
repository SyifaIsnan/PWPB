<?php

$arrayBuku = array("Pemrograman OOP", "Elex Media Komputindo", 1000, "10%");

$arrayBuku01 = ["Pemrograman web", "Andy Offset"];
$arrayMulti01 = [
    ["Pemrograman OOP", "Elex Komputindo", 1000, "10%"],
    ["Pemrograman web", "Andy Offset", 4500, "10%"],
    ["P", "Andy Offset", 4500, "10%"],
    ["Pemrograman web", "Andy Offset", 4500, "10%"],
];

// $c = count($arrayBuku);
// echo $c;

// $b = count(value: $arrayMulti01);
// echo $b;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Data Array</h1>
    <a href="">Tambah Data</a>
    
    <table  class="table table-striped" border="1">

        <tr>
            <td scope="row">No</td>
            <td scope="row">Judul Buku</td>
            <td scope="row">Penerbit</td>
            <td scope="row">Harga</td>
            <td scope="row">Discount</td>
            <td scope="row" colspan="2">Status</td>
        </tr>

        <!-- <td scope="row">1.</td> -->
         <?php $e = 1; ?>
          <?php foreach ($arrayMulti01 as $arrayMulti): ?>
            <tr>
                <td><?= $e++; ?></td>  
                <?php foreach($arrayMulti as $data): ?>                  
                <td>            
                    <?= $data; ?>
                    <?php endforeach ?>    
                        <td scope="row"><a href="">Update</a></td>
                        <td scope="row"><a href="">Delete</a></td>
                    <?php endforeach ?>   
                </td>
            </tr>

        <!-- perulangan for -->
        <!-- <?php for ($b = 0 ; $b < count(value: $arrayMulti01) ; $b++): ?>
            <tr>
                <td><?=$b +1?></td>               
                <?php for($d = 0; $d < 4; $d++): ?>               
                <td>            
                    <?= $arrayMulti01[$b][$d]; ?>
                    <?php endfor ?>    
                        <td scope="row"><a href="">Update</a></td>
                        <td scope="row"><a href="">Delete</a></td>
                    <?php endfor ?>   
                </td>
            </tr> -->

    </table>
</body>
</html>

