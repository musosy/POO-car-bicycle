<?php
class Vehicle {
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
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

    public function forward(): string {
        $this->currentSpeed = 15;

        return "GO !";
    }

    public function brake(): string {
        $sentence = "";
        while($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}

foreach (glob("Vehicles/*.php") as $filename) {
    include $filename;
}