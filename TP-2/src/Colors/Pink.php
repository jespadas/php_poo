<?php

namespace Car\Colors;

class Pink extends Color
{
    protected $name = "Pink";
    protected $hexaCode = "#FFC0CB";

    public function getHexaCode(): string
    {
        return $this->hexaCode;
    }
}
