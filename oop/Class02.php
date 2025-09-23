<?php

require('Class01.php');

$nanas = new Buah('Nanas', 'Kuning', '1 kg', '7000');
echo $nanas->info();
// $nanas->set_nama("Nanas");
// echo $nanas->get_nama();

echo "<br>";

$penggemarNanas = new Buah('Jeruk', 'Kuning', '1 kg', '7000') ;
echo $penggemarNanas->info();
# echo $penggemarNanas->nama;
#echo "<br>";


?>