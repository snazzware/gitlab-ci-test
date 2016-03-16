<?php

namespace Snazzware;

class Beer
{
    private $brewStyle;

    public function __construct()
    {
        $this->brewSty le = "Lager";
    }

    public function getBrewStyle()
    {
        return $this->brewStyle;
    }

    /**
     * Sets the style of brew.
     * @param string $brewStyle The style of brew
     */
    public function setBrewStyle($brewStyle)
    {
        $this->brewStyle = $brewStyle;
    }

}
