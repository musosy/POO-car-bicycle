<?php
class Car extends Vehicle
{   
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electic'
    ];
    protected string $energyLevel;
    private bool $hasCarBrake;

    final public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setHasCarBrake(false);
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



    /**
     * Get the value of hasCarBrake
     */ 
    public function getHasCarBrake()
    {
        return $this->hasCarBrake;
    }

    /**
     * Set the value of hasCarBrake
     *
     * @return  self
     */ 
    public function setHasCarBrake($hasCarBrake)
    {
        $this->hasCarBrake = $hasCarBrake;

        return $this;
    }

    public function start()
    {
        if(!$this->getHasCarBrake()) {
            throw new Exception("Car brake is on");
        }
        else return parent::forward();
    }
}