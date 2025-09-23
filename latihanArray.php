<?php

$id = 1;
$b = 0.1;
$c = false;
$d = "Belajar php";
$e = "Asad";
$f = "1847";
$g = "24/09/2007";
$h = "10.00";

$time = strtotime(datetime: '31/03/2008');

$newformat = date(format: 'Y-m-d', timestamp:$time);

$array01 = array(1, 0.1, false, "Belajar php", "Asad", "1847", $time);
var_dump(value: $array01);


echo "hasil perulangan for";
echo "<br><hr>";
for($j = 0 ; $j  < count(value: $array01) ; $j++){
    echo $array01[$j];
    echo "<br><hr>";
}


echo "hasil perulangan foreach";
echo "<br><hr>";
foreach($array01 as $data){
    echo $data;
    echo "<br><hr>";
}


echo "hasil perulangan while";
echo "<br><hr>";
$w = 0;
$y = count($array01);
while($w < $y){
    echo $array01[$w];
    $w++;
    echo "<br><hr>";
}


?>