<?php

namespace Car\Colors;

class Black implements Color
{
    private $name = "Black-alt";
    private $hexaCode = "#000000";

    public function getName(): string
    {
        return $this->name;
    }

    public function getHexacode(): string
    {
        return $this->hexaCode;
    }
}