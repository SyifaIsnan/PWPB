<?php 

#class
class Buah{
    #properti, #access modifier itu yang public, protected, private.

    public $nama;
    public $warna;
    public $berat;
    public $harga;

    #constructor
    public function __construct($nama, $warna, $berat, $harga) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
        $this->harga = $harga;
        
    }

    #method -> yang set dan get
    function set_nama($nama){
        $this->nama = $nama;
    }

    function get_nama(){
        return $this->nama;
    }

    function info(){
        echo "{$this->nama} berwarna {$this->warna} {$this->berat} nya harganya {$this->harga}";
    }


}

#objek 
$apel = new Buah('Apel','Merah', '1 kg', '300000'); #nama penulisannya disebut instansiasi, "apel itu instansi dari buah"
echo $apel->info();
echo "<br>";



#abstract

#inheritance
#override
#polimorfisme

?>