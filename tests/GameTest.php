<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function getsGameResultsForThreePupils()
    {
        $game = new Game(3);
        $expectedResult = "1 2 Fizz";

        $results = $game->getResults();

        $this->assertEquals($expectedResult, $results);
    }

    /**
     * @test
     */
    public function getsGameResultsForFivePupils()
    {
        $game = new Game(5);
        $expectedResult = "1 2 Fizz 4 Buzz";

        $results = $game->getResults();

        $this->assertEquals($expectedResult, $results);
    }

    /**
     * @test
     */
    public function getsGameResultsForFifteenPupils()
    {
        $game = new Game(15);
        $expectedResult = "1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz";

        $results = $game->getResults();

        $this->assertEquals($expectedResult, $results);
    }
}
