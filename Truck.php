<?php
require_once 'Car.php';

final class Truck extends Car /* extends Car pour récupérer le contruct et get/set d'energy */
{
    private int $capacity;
    private int $currentStock = 0;

    public function __contruct(string $color, int $nbSeats,string $energy, int $capacity) 
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setCapacity($capacity);
        $this->currentStock = 0;
    }

    public function getCapacity(): int 
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $capacity > 0 ? $this->capacity = $capacity : $this->capacity = 0;
    }

    public function getCurrentStock():int 
    {
        return $this->currentStock;
    }

    public function setCurrentStock(int $currentStock): string
    {
        if ($currentStock >= 0 && $currentStock <= $this->getCapacity()) 
        {
            $this->currentStock = $currentStock;
            return strval($currentStock);
        }
        $this->getCurrentStock = 0;
        return "You can't exceed the maximum load nor remove more than available";

    }

    public function isFull(): string 
    {
        if ($this->getCurrentStock() == 0) 
        {
            return 'empty';
        };

        if ($this->getCurrentStock() < $this->getCapacity() && $this->getCurrentStock() > 0)  
        {
            return "filling";
        };
        return "full";
    }
}