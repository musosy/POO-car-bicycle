<?php 
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }

    public function addVehicle(string $vehicleType)
    {
        $vehicleType instanceof Car ? array_push($this->getCurrentVehicles(), $vehicleType) : false;
    }
}