<?php
class Fruit{
    public $name;
    public $color;

    function set_name($name){
     $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    function set_color($color){
     $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }


}

$Apple = new Fruit();
$Mango = new Fruit();



$Apple->set_name("Apple");
$Apple->set_color("Red");
echo "The fruit name is :".$Apple->get_name();
echo "<br>";
echo "<br>";
echo "<br>";
echo "The fruit color is :".$Apple->get_color();

$Mango->set_name("Mango");
$Mango->set_color("Yellow");
echo "<br>";
echo "<br>";
echo "The fruit name for Mango instance is :".$Mango->get_name();
echo "<br>";
echo "The fruit color  mango instance is :".$Mango->get_color();

?>