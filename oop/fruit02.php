 <?php

class fruit01{

    #properti
    public $name;
    public $color;
    public $price;
    public $deskripsi;

    

    function set_price($price){
        $this->price = $price;
    }

    function set_dekripsi($deskripsi){
        $this->deskripsi = $deskripsi;
    }

    #method
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }
}

$apple = new fruit01();
$pisang = new fruit01();
$semangka = new fruit01();  

$apple -> set_name("Apel ");
echo $apple -> get_name();

$apple -> set_color("merah ");
echo $apple -> get_color();

$apple -> set_dekripsi('harganya ');
echo $apple -> deskripsi;

$apple -> set_price(3000);
echo $apple -> price;

echo "<hr>";

$pisang -> set_name("Pisang ");
echo $pisang -> get_name();

$pisang -> set_color("kuning ");
echo $pisang -> get_color();

$pisang -> set_dekripsi('harganya ');
echo $pisang -> deskripsi;

$pisang -> set_price(3000);
echo $pisang -> price;


echo "<hr>";

$semangka -> set_name("Semangka ");
echo $semangka -> get_name();

$semangka -> set_color("kuning ");
echo $semangka -> get_color();

$semangka -> set_dekripsi('harganya ');
echo $semangka -> deskripsi;

$semangka -> set_price(30000);
echo $semangka -> price;





?>