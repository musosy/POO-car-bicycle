<?php


class Bicycle {
    private string $color;

    private int $currentSpeed;

    public int $nbSeats;

    public int $nbWheels;

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

    public function getColor(): string {
        return $this->color;
    }

    public function setColor($color): void {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed): void {
        $currentSpeed >= 0 ? $this->currentSpeed = $currentSpeed : false;
    }

    public function __construct(string $color) {
        $this->color = $color;
    }
};

?>