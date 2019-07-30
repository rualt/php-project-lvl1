<?php

namespace BrainGames\Prime;

use function \BrainGames\Engine\runGame;

function isPrime($number)
{
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
        return true;
    }
}

function calcGame()
{
    $description = 'Answer "yes" if given number is prime, otherwise answer "no".';
    $gameData = function () {
        $question = rand(2, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    runGame($description, $gameData);
}
