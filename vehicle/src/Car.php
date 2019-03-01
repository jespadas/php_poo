<?php

namespace Vehicule;

use Vehicule\Exception\CarAlreadyStartedException;
use Vehicule\Exception\CarAlreadyStoppedException;

class Car
{
    private $engine;
    const STATUS_ON = "ON";
    const STATUS_OFF = "OFF";
    
    private $status = self::STATUS_OFF;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function start()
    {
        if ($this->status === self::STATUS_OFF) {
            $this->status = self::STATUS_ON;
            return $this->engine->turnOn();
        } else {
            throw new CarAlreadyStartedException();
        }
    }

    public function stop()
    {
        if ($this->status === self::STATUS_ON) {
            $this->staTUS = self::STATUS_OFF;
            return $this->engine->turnOff();
        } else {
            throw new CarAlreadyStoppedException();
        }
    }
}
