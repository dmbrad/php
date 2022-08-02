<?php
$cars=("Nissan,Toyota,Subaru,BMW,Mercedes,Range Rover,VW");
echo $cars;
echo "<br>";

$float=10.56;
echo $float;
echo "<br>";

$string="Hello world";
echo $string;
echo "<br>";

$integer=11995;
echo $integer;
echo "<br>";

class Car {
    public $color;
    public $model;
    public function _construct($color,$model){
        $this->color=$color;
        $this->model=$model;
    }
    public function message(){
        return "My car is a ". $this->color. "Black".  $this->model. "Mercedes";
    }
}
$myCar= new Car("Black", "Mercedes");
echo $myCar->message();
echo "<br";
$myCar=new Car("White", "Toyota");
echo $myCar->message();


