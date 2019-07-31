<?php

namespace BrainGames\Gcd;

use function \BrainGames\Engine\runGame;

function makeDivisorList($number)
{
    $result = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $result[] = $i;
        }
    }
    return $result;
}

function calcGame()
{
    $description = 'Find the greatest common divisor of given numbers.';
    $getGameData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "$num1 $num2";
        $commonDivisors = array_intersect(makeDivisorList($num1), makeDivisorList($num2));
        $correctAnswer = end($commonDivisors);
        return [$question, "$correctAnswer"];
    };
    runGame($description, $getGameData);
}
