<?php

namespace BrainGames\Prime;

use function \BrainGames\Engine\runGame;

function isPrime($number)
{
    $bottomBorder = 2;
    $topBorder = $number / 2;
    for ($i = $bottomBorder; $i <= $topBorder; $i++) {
        if ($number % $i === 0) {
            return false;
        }
        return true;
    }
}

function calcGame()
{
    $description = 'Answer "yes" if given number is prime, otherwise answer "no".';
    $getGameData = function () {
        $question = rand(-10, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    runGame($description, $getGameData);
}
