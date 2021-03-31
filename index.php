<?php
require_once 'Car.php';
require_once 'Bicycle.php';

$myCar = new Car('blue', 4, 'gasoil');
$someoneCar = new Car('red', 4, 'electric');
$aBike = new Bicycle('pink');

echo $myCar->forward()."<br>";
echo $myCar->brake()."<br>";
echo $myCar->start()."<br>";
echo $myCar->forward()."<br>";
echo $myCar->forward()."<br>";
echo $myCar->getCurrentSpeed()."<br>";
echo $myCar->brake()."<br>";
echo $myCar->brake()."<br>";
echo $myCar->brake()."<br>";
echo $myCar->brake()."<br>";
echo $myCar->brake()."<br>";
echo $myCar->brake()."<br>";

echo $someoneCar->getColor()."<br>";
echo $aBike->getColor();

echo $aBike->forward();
echo $aBike->forward();
echo $aBike->forward();
echo $aBike->brake();

?>
