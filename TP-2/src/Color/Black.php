<?php

namespace Car\Color;

class Black implements ColorInterface
{
    private $name = "Black";
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

