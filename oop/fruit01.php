<?php

class fruit01{

    #properti
    public $name;
    public $color;

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
$apple -> set_name("Apel");
echo $apple -> get_name();

$apple -> set_color("Merah");
echo $apple -> get_color();

echo "<br>";
echo "<hr>";





?>