<?php

namespace Snazzware;

class Beer
{
    private $brewStyle;

    public function __construct()
    {
        $this->brewStyle = "Lager";
    }

    public function getBrewStyle()
    {
        return $this->brewStyle;
    }

    public function setBrewStyle($brewStyle)
    {
        $this->brewStyle = $brewStyle;
    }

}
