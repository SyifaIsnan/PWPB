<?php

require "StaticMtd01.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Kriteria</th>
        </tr>
        <tr>
            <td>1. </td>
            <td><?= $mauildya->message(); ?></td>
        </tr>
        <tr>
            <td>2. </td>
            <td><?= $naura->message(); ?></td>
        </tr>
        <tr>
            <td>3. </td>
            <td><?= $shen->message(); ?></td>
        </tr>
        <tr>
            <td>4. </td>
            <td><?= $lige->message(); ?></td>
        </tr>
        <tr>
            <td>5. </td>
            <td><?= $pecheng->message(); ?></td>
        </tr>
    </table>
</body>
</html>