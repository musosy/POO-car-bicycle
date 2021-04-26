<?php

final class Bicycle extends Vehicle implements LightableInterface 
{
    public function switchOn()
    {
        return $this->getCurrentSpeed() > 10 ? true : false;
    }    
};

?>