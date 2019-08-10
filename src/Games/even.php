<?php

namespace BrainGames\Even;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if number even, otherwise answer "no".';

function isEven($number)
{
    return $number % 2 === 0;
}

function calcGame()
{
    $getGameData = function () {
        $question = rand(0, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    runGame(DESCRIPTION, $getGameData);
}
