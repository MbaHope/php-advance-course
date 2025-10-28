<?php
class Fruit
{
    // properties
    public  $name;
    public  $color;
    public $shape;

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

    public function set_shape($shape)
    {
        return $this->shape = $shape;
    }
}


$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Green");
$apple->set_shape("Circle");

$banana = new Fruit();
$banana->set_name("Banana");
$banana->set_color("Yellow");
$banana->set_shape("Sphere");

// echo $apple->get_name();
echo "For Apple"; echo "<hr/>";
echo "<br />";

echo $apple->name;
echo "<br />";
// echo $banana->get_name();
echo $apple->color;
echo "<br />";
echo $apple->shape;
echo "<br />";
echo "<br />";

echo "For Banana";echo "<hr/>";
echo "<br />";
// echo $apple->get_color();
echo $banana->name;
echo "<br />";
// echo $banana->get_color();
echo $banana->color;
echo "<br />";
echo $banana->shape;
