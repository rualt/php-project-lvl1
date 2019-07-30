<?php

namespace BrainGames\Even;

use function \BrainGames\Engine\runGame;

function isEven($number)
{
    return $number % 2 === 0;
}

function calcGame()
{
    $description = 'Answer "yes" if number even, otherwise answer "no".';
    $gameData = function () {
        $question = rand(0, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    runGame($description, $gameData);
}
