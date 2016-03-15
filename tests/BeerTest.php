<?php

use Snazzware as Snazzware;

class BeerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Snazzware\Beer
     * @return none
     */
    public function testSeasonalBeer()
    {
        $beer = new \Snazzware\Beer();

        $beer->setBrewStyle("PHPUnit Special");

        $this->assertEquals($beer->getBrewStyle(), "PHPUnit Special");
    }

}
