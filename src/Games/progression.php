<?php

namespace BrainGames\Progression;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';

function makeProgression($firstNum, $difference)
{
    $progressionLength = 10;
    $progression[] = $firstNum;
    for ($i = 0; $i < $progressionLength - 1; $i++) {
        $progression[] = $progression[$i] + $difference;
    }
    return $progression;
}

function calcGame()
{
    $getGameData = function () {
        $progression = makeProgression(rand(0, 80), rand(2, 4));
        $progressionLength = count($progression);
        $randKey = rand(0, $progressionLength - 1);
        $correctAnswer = $progression[$randKey];
        $progression[$randKey] = '..';
        $question = implode(' ', $progression);
        return [$question, "$correctAnswer"];
    };
    runGame(DESCRIPTION, $getGameData);
}
