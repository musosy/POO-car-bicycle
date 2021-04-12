<?php
require_once 'require.php';

/* $motor = new MotorWay();
$pedestrian = new PedestrianWay();
$residential = new ResidentialWay();
$motor->addVehicle(new Car('blue', 5, 'electric'));
$pedestrian->addVehicle(new Car('blue', 5, 'electric'));
$residential->addVehicle(new Car('blue', 5, 'electric'));
$motor->addVehicle(new Bicycle('red', 1));
$pedestrian->addVehicle(new Bicycle('red', 1));
$residential->addVehicle(new Bicycle('red', 1));
$motor->addVehicle(new Skateboard('black', 1));
$pedestrian->addVehicle(new Skateboard('black', 1));
$residential->addVehicle(new Skateboard('black', 1));
var_dump($motor);
var_dump($pedestrian);
var_dump($residential); */

$car = new Car('blue', 5, 'electric');

try {
    echo $car->start();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . ".<br>";
    echo "Removing car brake ... <br>";
    $car->setHasCarBrake(true);
} finally {
    echo "Ma voiture roule comme un donut.\n";
}
