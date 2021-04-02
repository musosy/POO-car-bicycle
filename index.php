<?php
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';



$motor = new MotorWay();
$pedestrian = new PedestrianWay();
$residential = new ResidentialWay();
$motor->addVehicle(new Car('blue', 5, 'electric'));
$pedestrian->addVehicle(new Car('blue', 5, 'electric'));
$residential->addVehicle(new Car('blue', 5, 'electric'));
$motor->addVehicle(new Bicycle('red', 1));
$pedestrian->addVehicle(new Bicycle('red', 1));
$residential->addVehicle(new Bicycle('red', 1));
var_dump($motor);
var_dump($pedestrian);
var_dump($residential);