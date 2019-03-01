<?php

namespace Vehicule\Exception;

class CarAlreadyStoppedException extends \Exception
{
    protected $code = "CS02";
    protected $message = "Car already stopped";
}

