<?php

namespace BrainGames\Progression;

use function \BrainGames\Engine\runGame;

function makeProgression($firstNum, $difference)
{
    $progressionLenght = 10;
    $progression[] = $firstNum;
    for ($i = 0; $i < $progressionLenght - 1; $i++) {
        $progression[] = $progression[$i] + $difference;
    }
    return $progression;
}

function calcGame()
{
    $description = 'What number is missing in the progression?';
    $getGameData = function () {
        $progression = makeProgression(rand(0, 80), rand(2, 4));
        $progressionLenght = count($progression);
        $randKey = rand(0, $progressionLenght - 1);
        $correctAnswer = $progression[$randKey];
        $progression[$randKey] = '..';
        $question = implode(' ', $progression);
        return [$question, "$correctAnswer"];
    };
    runGame($description, $getGameData);
}
