<?php

namespace BrainGames\Prime;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime, otherwise answer "no".';

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function makeGame()
{
    $getGameData = function () {
        $question = rand(-10, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    runGame(DESCRIPTION, $getGameData);
}
