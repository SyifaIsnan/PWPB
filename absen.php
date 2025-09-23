<?php

$siswa = array(
        array(1, "18470", "ADELIA SAFITRI", "PEREMPUAN"),
        array(2, "18471", "AHDZA MAY NUR FARIZI", "LAKI-LAKI"),
        array(3, "18472", "AIDHA RAHMAWATI", "PEREMPUAN"),
        array(4, "18473", "AISYAH ALTHO FUNISA", "PEREMPUAN"),
        array(5, "18474", "AL ZAKI IBRA RAMADANI", "LAKI-LAKI"),
        array(6, "18475", "ALEXANDER FORTUNA NUR ZULKARNAIN", "PEREMPUAN"),
        array(7, "18476", "ANNAZAIDATUL NUR FU'AINI", "PEREMPUAN"),
        array(8, "18477", "ASAD TEVY RAMADHAN", "LAKI-LAKI"),
        array(9, "18478", "AZRRIL DIKI SAPUTRA", "LAKI-LAKI"),
        array(10, "18479", "DINDA SANIA MAGHFIRA", "PEREMPUAN"),
        array(11, "18480", "ELZA RAHMAWATI", "PEREMPUAN"),
        array(12, "18481", "EVA NUR AISYAH", "PEREMPUAN"),
        array(13, "18482", "FADWA PAMULASIH", "PEREMPUAN"),
        array(14, "18483", "FAHMI DWI SANTOSO", "LAKI-LAKI"),
        array(15, "18484", "FAQIH RIZQI NUGRAHA", "LAKI-LAKI"),
        array(16, "18485", "FAUZAN RISTIAN", "LAKI-LAKI"),
        array(17, "18486", "FIKRI VALNABIL SUGIARTO", "LAKI-LAKI")     
        );

foreach($siswa as $d){
    foreach ($d as $s){
        echo $s;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    </style>
</head>
<body>
    <h1>Data Siswa XII RPL 01</h1>

    <table border="1" cellpadding="8" cellspacing="0">
    
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>AKSI</th>
        </tr>
        

        <?php
        for($i = 0; $i < count($siswa); $i++){
            echo "<tr>";
            echo "<td>".$siswa[$i][0]."</td>";
            echo "<td>".$siswa[$i][1]."</td>";
            echo "<td>".$siswa[$i][2]."</td>";
            echo "<td>".$siswa[$i][3]."</td>";
            
            echo "</tr>";
        }
        ?>
    
    </table>
</body>
</html>



