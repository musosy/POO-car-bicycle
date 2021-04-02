<?php 

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }
    final public function addVehicle(Vehicle $vehicle): PedestrianWay
    {
        if ($vehicle instanceof Bicycle) {
            $newVehicles = $this->getCurrentVehicles();
            array_push($newVehicles, $vehicle);
            $this->setCurrentVehicles($newVehicles);
        }
        return $this;
    }
}