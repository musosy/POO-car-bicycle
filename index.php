<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$myTruck = new Truck('red', 4, 'electric', 10000);
$myTruck->setCapacity(10000);
$myTruck->setCurrentStock(0);
echo $myTruck->setCurrentStock(5000)."<br>";
echo $myTruck->isFull()."<br><br>";
echo $myTruck->setCurrentStock(-500)."<br>";
echo $myTruck->isFull()."<br><br>";
echo $myTruck->setCurrentStock(10000)."<br>";
echo $myTruck->isFull()."<br><br>";
echo $myTruck->setCurrentStock(0)."<br>";
echo $myTruck->isFull()."<br>";

?>
