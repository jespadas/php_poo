<?php

namespace Vehicule\Engine;

use Vehicule\EngineInterface;

class DieselEngine implements EngineInterface
{
    public function turnOn()
    {
        return "ON";
    }

    public function turnOff()
    {
        return "OFF";
    }
}
