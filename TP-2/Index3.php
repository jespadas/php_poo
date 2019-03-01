<?php

include "vendor/autoload.php";

use Car\Colors\Pink;
use Car\Colors\Black as BlackAlt;
use Car\Color\Black;

echo "<hr/>";

$pink = new Pink();
var_dump($pink->getName());
echo "<br/>";
var_dump($pink->getHexaCode());
echo "<br/>";

echo "<hr/>";

$black = new Black();
var_dump($black->getName());
echo "<br/>";
var_dump($black->getHexaCode());
echo "<br/>";

echo "<hr/>";

$black = new BlackAlt();
var_dump($black->getName());
echo "<br/>";
var_dump($black->getHexaCode());