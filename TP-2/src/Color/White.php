<?php

namespace Car\Colors;

class White implements ColorInterface
{
    private $name = "White";
    private $hexaCode = "#FFFFFF";

    public function getName(): string
    {
        return $this->name;
    }

    public function getHexacode(): string
    {
        return $this->hexaCode;
    }
}
