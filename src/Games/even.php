<?php

namespace BrainGames\Even;

use function \BrainGames\Engine\startGame;

function isEven($number)
{
    return $number % 2 === 0;
}

function runGame()
{
    $description = "Answer 'yes' if number even, otherwise answer 'no'.";
    $gameData = function () {
        $question = rand(0, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    startGame($description, $gameData);
}
