<?php

namespace Vehicule\Exception;

class CarAlreadyStartedException extends \Exception
{ 
    protected $code = "CS01";
    protected $message = "Car already started";
 }

