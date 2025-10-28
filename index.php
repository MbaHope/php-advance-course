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

    //    methods
    public function set_color($color)
    {
        $this->color = $color;
    }

    public function get_color()
    {
        return $this->color;
    }
}


$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Green");

$banana = new Fruit();
$banana->set_name("Banana");
$banana->set_color("Yellow");

// echo $apple->get_name();
echo $apple->name;
echo "<br />";
// echo $banana->get_name();
echo $banana->name;
echo "<br />";
echo "<br />";

// echo $apple->get_color();
echo $apple->color;
echo "<br />";
// echo $banana->get_color();
echo $banana->color;