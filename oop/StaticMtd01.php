<?php

class Siswa{
    public $nama;
    public $tinggi;
    public $nilai;  
    public function __construct($nama, $tinggi, $nilai){
        $this->nama = $nama;
        $this->tinggi = $tinggi;
        $this->nilai = $nilai;
    }

}

class Data extends Siswa{
    public function message(){
        echo "{$this->nama} bertinggi badan {$this->tinggi}, nilai PHP nya {$this->nilai}";    
    }
}

$mauildya = new Data("Maulidya", "170 cm", "90");
$naura = new Data("Naura", "167 cm", "97");
$shen = new Data("Shen Fe", "179 cm", "99");
$lige = new Data("Lige", "165 cm", "90");
$pecheng = new Data("Pecheng", "177 cm", "99");


?>

