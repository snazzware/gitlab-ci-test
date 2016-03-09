<?php

use Snazzware as Snazzware;

class SeasonalBeerTest extends PHPUnit_Framework_TestCase
{

    public function testIsStoutInWinter()
    {
        $beer = new \Snazzware\SeasonalBeer("Winter");

        $this->assertEquals("Stout", $beer->getBrewStyle());
    }

    public function testIsPaleInSummer()
    {
        $beer = new \Snazzware\SeasonalBeer("Summer");

        $this->assertEquals("IPA", $beer->getBrewStyle());
    }

}
