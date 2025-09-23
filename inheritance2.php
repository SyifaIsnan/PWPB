<?php 
class Siswa {
    public $orang,
           $objek,
           $penyambung,
           $keterangan;

    public function __construct($orang="saya", $objek="siswa", $penyambung="yang", $keterangan="rajin") {
           $this->orang = $orang;
           $this->objek = $objek;
           $this->penyambung = $penyambung;
           $this->keterangan = $keterangan;
    }

    public function getLabel(): string{
        return "$this->objek, $this->keterangan";
    }

    public function getInfoSiswa(): string {
        $str = "{$this->orang} {$this->objek} {$this->penyambung} {$this->keterangan}";
        return $str;
    }

  }

$info1 = new Siswa(orang: "Saya", objek: "siswa", penyambung: "yang", keterangan: "rajin");
echo $info1->getInfoSiswa();
?>