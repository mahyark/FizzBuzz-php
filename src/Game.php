<?php

namespace Deg540\CleanCodeKata9;

class Game
{
    private const ANSWER_THREE = "Fizz";
    private const ANSWER_FIVE = "Buzz";

    private int $totalPupils;

    public function __construct(int $totalPupils)
    {
        $this->totalPupils = $totalPupils;
    }

    public function getResults(): string
    {
        $results = "";
        for ($number = 1; $number <= $this->totalPupils; $number++) {
            $results .= $this->getAnswer($number);
            $results .= $number === $this->totalPupils ? "" : " ";
        }

        return $results;
    }

    private function getAnswer(string $number): string
    {
        if ($number % 3 == 0 && $number % 5 == 0) {
            return self::ANSWER_THREE . self::ANSWER_FIVE;
        }
        if ($number % 3 == 0) {
            return self::ANSWER_THREE;
        }
        if ($number % 5 == 0) {
            return self::ANSWER_FIVE;
        }

        return $number;
    }
}