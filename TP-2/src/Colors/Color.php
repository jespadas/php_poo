<?php

namespace Car\Colors;

class Color
{
    private $private = "no";
    protected $name = "no name";
    protected $hexaCode = "no code";

    public function getName(): string
    {
        return $this->name;
    }

}

