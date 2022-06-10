<?php 

/**
 * Class -> a blueprint to make objects
 * Object -> an instance created from the class
 * Class has methods and properties 
 * Getter and setter methods in the class are used to retrieve values
 * esp private ones and set values respectively.
 * instanceof keyword is used to check if an object belongs to the class
*/

class Vehicle 
{
    protected $price = 5000000;
    public static function test()
    {
        echo "This will be overrided.";
    }
    // private $category;
    // private $color;
    
    // public function __construct($category, $color)
    // {
    //     $this->category = $category;
    //     $this->color = $color;
    // }

    // public function set_price($price)
    // {
    //     $this->price = $price;
    // }

    // public function get_price()
    // {
    //     echo $this->price;
    // }

    // public function set_desc($category, $color)
    // {
    //     $this->category = $category;
    //     $this->color = $color;
    // }

    // public function get_desc()
    // {
    //     return $this->category . " " . $this->color;
    // }

    // public function __destruct()
    // {
    //     echo $this->category . " " . $this->color . "<br>";
    // }
}

class Taxi extends Vehicle
{
    public static $color = 'Yellow';
    // public $price = 2000000;
    public static function test()
    {
        $price = 2000000;
        echo $price; //accessing protected property within the derived class
    }
}

// $cab = new Taxi();
// $cab->test();
echo "<br>";
echo Taxi::$color;
echo "<br>";
echo Taxi::test();


// $tesla = new Vehicle("Electric", "Black");
// $ferrari = new Vehicle("Sports", "White");


// var_dump($tesla instanceof Vehicle);
// $tesla->set_desc("Electric", "Black");
// $ferrari->set_desc("Sports", "White");

// echo $tesla->get_desc();
// echo "<br>";
// echo $ferrari->get_desc();

// $tesla = new Vehicle();
// $tesla->set_price(40000000);
// $tesla->get_price();

