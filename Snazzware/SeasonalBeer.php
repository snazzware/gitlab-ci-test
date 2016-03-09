<?php
namespace Snazzware;

class SeasonalBeer extends Beer
{
    
    public function __construct($season)
    {
        parent::__construct();

        switch ($season) {
            case 'Summer':
                $this->setBrewStyle("IPA");
            break;
            case 'Winter':
                $this->setBrewStyle("Stout");
            break;
        }
    }

}
