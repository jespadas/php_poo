<?php

include "vendor/autoload.php";

use Vehicule\Engine\DieselEngine;
use Vehicule\Car;
use Vehicule\Exception\CarAlreadyStartedException;
use Vehicule\Exception\CarAlreadyStoppedException;

$engine = new DieselEngine();
$car = new Car($engine);

try {
    var_dump($car->start());
    echo '<br/>';
    var_dump($car->start());
    echo '<br/>';
    var_dump($car->stop());
    echo '<br/>';
    var_dump($car->stop());
    echo '<br/>';
    var_dump($car->start());
} catch(CarAlreadyStartedException $e) {
    echo 'Aïe: ' . $car->stop();
    echo '<br/>';
} catch (CarAlreadyStoppedException $e) {
    echo 'Aïe: ' . $car->start();
    echo '<br/>';
}
    
    /* catch (\Exception $e) {
    echo $e->getMessage();
} */
