<!DOCTYPE html>
<html>
<body>

<?php
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

function luasST($alas, $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

echo "segitiga dengan alas = 2 dan tinggi = 4, maka luasnya adalah " . luasST(2,4) . "<br>";


echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>

</body>
</html>
