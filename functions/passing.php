<!DOCTYPE html>
<html>
<body>

<?php
function add_five(&$value) {
  $value -= 5;
}

$num = 100;
add_five($num);
echo $num;
?>

</body>
</html>
