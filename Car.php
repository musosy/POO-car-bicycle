<?php

class Car extends Vehicle
{
    
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electic'
    ];
    protected sting $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

  
    public function getEnergy(): string 
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car 
    {
        in_array($energy, self::ALLOWED_ENERGIES) ? $this->energy = $energy: false;
        return $this;
    }

    public function getEnergyLevel(): int 
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void 
    {
        $this->energyLevel = $energyLevel;
    }


}