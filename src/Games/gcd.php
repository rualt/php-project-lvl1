<?php

namespace BrainGames\Gcd;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd($num1, $num2)
{
    $biggerNum = $num1 > $num2 ? $num1 : $num2;
    $smallerNum = $num1 > $num2 ? $num2 : $num1;
    $remainder = $biggerNum % $smallerNum;
    return $remainder == 0 ? $smallerNum : getGcd($smallerNum, $remainder);
}

function makeGame()
{
    $getGameData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "$num1 $num2";
        $correctAnswer = getGcd($num1, $num2);
        return [$question, (string) $correctAnswer];
    };
    runGame(DESCRIPTION, $getGameData);
}
