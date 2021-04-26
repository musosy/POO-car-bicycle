<?php

final class Bicycle extends Vehicle implements LightableInterface 
{
    public function switchOff():bool
    {
        return false;
    }

    public function switchOn():bool
    {
        return $this->getCurrentSpeed() > 10 ? true : false;
    }    
};

?>