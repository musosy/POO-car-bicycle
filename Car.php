<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private int $energy;
    private sting $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getNbWheels(): int 
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed(): int 
    {
        return $this->currentSpeed;
    }
    public function getColor(): string 
    {
        return $this->color;
    }
    public function getNbSeats(): int 
    {
        return $this->nbSeats;
    }
    public function getEnergy(): string 
    {
        return $this->energy;
    }
    public function getEnergyLevel(): int 
    {
        return $this->energyLevel;
    }

    public function start(): string {

        $this->currentSpeed == 0 ? $this->currentSpeed = 30:false;

        return "Go !";
    }

    public function forward(): string {
        if($this->currentSpeed > 0)  {
            $this->currentSpeed += 10;
            return "Speeding up !";
        }
        return "Start the engine first !";
    }

    public function brake(): string {
        if($this->currentSpeed > 0)  {
            $this->currentSpeed -= 10;
            return "Slowing down !";
        }
        return "Are we really going backward ?";
    }

}
