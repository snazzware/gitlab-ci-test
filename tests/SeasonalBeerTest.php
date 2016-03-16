<?php

use Snazzware as Snazzware;

class SeasonalBeerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Snazzware\SeasonalBeer
     * @return none
     */
    public function testSeasonalBeer()
    {
        $winter = new \Snazzware\SeasonalBeer("Winter");
        $summer = new \Snazzware\SeasonalBeer("Summer");

        $this->assertEquals($winter->getBrewStyle(), "Stout");
        $this->assertEquals($summer->getBrewStyle(), "hjvhjgvjhg");
    }

}
