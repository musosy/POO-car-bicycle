<?php
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$motor = new MotorWay();
$pedestrian = new PedestrianWay();
$residential = new ResidentialWay();
var_dump($motor);
var_dump($pedestrian);
var_dump($residential);