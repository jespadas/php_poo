<?php

namespace Car;

use Car\Color\ColorInterface;

class ColorStock
{

    private $colors = [];

    public function addColor(ColorInterface $color)
    {
        if ($this->colorExists($color) === false) {
            $this->colors[] = $color;
        }
    }

    public function removeColor(ColorInterface $color)
    {
        if ($this->colorExists($color) === true) {
            $key = array_search($color, $this->colors);
            unset($this->colors[$key]);
        }
    }

    public function colorExists(ColorInterface $color): bool
    {
        return in_array($color, $this->colors);
    }

    public function getColorCount(): int
    {
        return count($this->colors);
    }

    public function searchColorByName($name)
    {
        $tab = array_filter(
            $this->colors,
            function (ColorInterface $color) use ($name) {
                return $color->getName() === $name;
            }
        );
        if (count($tab) > 0) {
            $tab = array_values($tab);
            return $tab[0];
        }
        return null;
    }

    public function gerColorByHexacode($hexaCode)
    {
        $tab = array_filter(
            $this->colors,
            function (ColorInterface $color) use ($hexaCode) {
                return $color->getHexaCode() === $hexaCode;
            }
        );
        if (count($tab) > 0) {
            $tab = array_values($tab);
            return $tab[0];
        }
    }
}
