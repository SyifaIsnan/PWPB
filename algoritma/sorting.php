<?php

$angka = [2,1];



for($i = 0; $i <= count($angka) ; $i++){
    if($angka[$i] < $angka[$i++]){
        $bilKecil = $angka[$i];
        echo $bilKecil;
    }else{
        $bilKecil = $angka[$i++];
        echo $bilKecil;
    }
}

?>