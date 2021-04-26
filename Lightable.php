<?php

class LightableInterface
{
    public function switchOn(int $percentage)
    {
        return true;
    }
    public function switchOff(int $percentage)
    {
        return false;
    }
}