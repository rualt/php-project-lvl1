<?php

namespace BrainGames\Progression;

use function \BrainGames\Engine\runGame;

const PROGRESSION_LENGTH = 10;
const DESCRIPTION = 'What number is missing in the progression?';

function makeProgression($firstNum, $difference)
{
    $progression[] = $firstNum;
    for ($i = 0; $i < PROGRESSION_LENGTH - 1; $i++) {
        $progression[] = $progression[$i] + $difference;
    }
    return $progression;
}

function calcGame()
{
    $getGameData = function () {
        $progression = makeProgression(rand(0, 80), rand(2, 4));
        $randKey = rand(0, count($progression) - 1);
        $correctAnswer = $progression[$randKey];
        $progression[$randKey] = '..';
        $question = implode(' ', $progression);
        return [$question, (string) $correctAnswer];
    };
    runGame(DESCRIPTION, $getGameData);
}
