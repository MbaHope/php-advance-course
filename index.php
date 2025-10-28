<?php
class Fruit
{
    // properties
    public  $name;
    public  $color;
    public $shape;

    //    method for name  ===============
    public function __construct($name, $color, $shape)
    {
        $this->name = $name;
        $this->color = $color;
        $this->shape = $shape;
    }


    // public function get_name()
    // {
    //     return $this->name;
    // }

    // public function get_color()
    // {
    //     return $this->color;
    // }

    public function __destruct()
    {
        echo "The fruit is " . $this->name . "," . " the color is " . $this->color . " and the shape is " . $this->shape . "<br />" . "<br />";
    }
}

$apple = new Fruit("Apple", "Green", "Circle");

$banana = new Fruit("Banana", "Yellow", "Sphere");

// echo $apple->get_name();
// echo "For Apple";
// echo "<hr/>";

// echo $apple->name;
// echo "<br />";
// echo $banana->get_name();
// echo $apple->color;
// echo "<br />";
// echo $apple->shape;
// echo "<br />";
// echo "<br />";

// echo "For Banana";
// echo "<hr/>";
// echo $apple->get_color();
// echo $banana->name;
// echo "<br />";
// echo $banana->get_color();
// echo $banana->color;
// echo "<br />";
// echo $banana->shape;
