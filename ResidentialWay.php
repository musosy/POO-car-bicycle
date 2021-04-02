<?php 
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(2);
        $this->setMaxSpeed(50);
    }
    
    public function addVehicle(Vehicle $vehicle): ResidentialWay
    {
        
        $newVehicles = $this->getCurrentVehicles();
        array_push($newVehicles, $vehicle);
        $this->setCurrentVehicles($newVehicles);
        return $this;
    }
}