<?php

namespace Car\Colors;

class Blue implements ColorInterface
{
    private $name = "Blue";
    private $hexaCode = "#0000FF";

    public function getName(): string
    {
        return $this->name;
    }
    public function getHexaCode(): string
    {
        return $this->hexaCode;
    }
}

