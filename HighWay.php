<?php
abstract class HighWay
{
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function __construct() 
    {
        $this->setCurrentVehicles(array());
    }
    
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }

    
    public function getNbLane()
    {
        return $this->nbLane;
    }


    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    abstract public function addVehicle(Vehicle $vehicleType);
    
}

foreach (glob("Highway/*.php") as $filename) {
    include $filename;
}