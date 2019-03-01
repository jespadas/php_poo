<?php

namespace Car;

use Car\Color\Color;

class ColorStockH
{

    private $colors = [];

    public function addColor(Color $color)
    {
        if ($this->colorExists($color) === false) {
            $this->colors[] = $color;
        }
    }

    public function removeColor(Color $color)
    {
        if ($this->colorExists($color) === true) {
            $key = array_search($color, $this->colors);
            unset($this->colors[$key]);
        }
    }

    public function colorExists(Color $color): bool
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
            function (Color $color) use ($name) {
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
            function (Color $color) use ($hexaCode) {
                return $color->getHexaCode() === $hexaCode;
            }
        );
        if (count($tab) > 0) {
            $tab = array_values($tab);
            return $tab[0];
        }
    }
}
