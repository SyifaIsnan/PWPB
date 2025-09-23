<?php

$siswa = array (
  array(1, "18479", "Dinda"),
  array(2, "18480", "Elza"),
  array(3, "18481", "Eva"),
  array(4, "18482", "Fadwa"),
  array(5, "18483", "Fahmi")
);


echo $siswa[0][0]." - nis: ".$siswa[0][1].", nama: ".$siswa[0][2].".<br>";
echo $siswa[1][0]." - nis: ".$siswa[1][1].", nama: ".$siswa[1][2].".<br>";
echo $siswa[2][0]." - nis: ".$siswa[2][1].", nama: ".$siswa[2][2].".<br>";
echo $siswa[3][0]." - nis: ".$siswa[3][1].", nama: ".$siswa[3][2].".<br>";
echo $siswa[4][0]." - nis: ".$siswa[4][1].", nama: ".$siswa[4][2].".<br><br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>
    <h3>Daftar Siswa</h3>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            
        </tr>

        <?php
       
        for($i = 0; $i < count($siswa); $i++){
            echo "<tr>";
            echo "<td>".$siswa[$i][0]."</td>";
            echo "<td>".$siswa[$i][1]."</td>";
            echo "<td>".$siswa[$i][2]."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
