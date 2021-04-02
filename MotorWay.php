<?php 

final class MotorWay extends HighWay
{
    public function __construct()
    {   parent::__construct();
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }

    final public function addVehicle(Vehicle $vehicle): MotorWay
    {
        if ($vehicle instanceof Car) {
            $newVehicles = $this->getCurrentVehicles();
            array_push($newVehicles, $vehicle);
            $this->setCurrentVehicles($newVehicles);
        }
        return $this;
    }
}