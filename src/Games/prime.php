<?php

namespace BrainGames\Prime;

use function \BrainGames\Engine\startGame;

function isPrime($number)
{
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
        return true;
    }
}

function runGame()
{
    $description = "Answer \"yes\" if given number is prime, otherwise answer \"no\".\n";
    $gameData = function () {
        $question = rand(0, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    startGame($description, $gameData);
}
