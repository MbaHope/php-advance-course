<?php
class Fruit
{
    // properties
    public  $name;
    public  $color;


    //    methods
    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }
}
$apple = new Fruit();
$apple->set_name("Apple");

$banana = new Fruit();
$banana->set_name("Banana");

$apple->get_name();
$banana->get_name();

echo $apple->get_name();
echo "<br />";
echo $banana->get_name();