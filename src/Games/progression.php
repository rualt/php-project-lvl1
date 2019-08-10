<?php

namespace BrainGames\Progression;

use function \BrainGames\Engine\runGame;

const PROGRESSION_LENGTH = 10;
const DESCRIPTION = 'What number is missing in the progression?';

function makeProgression($initialTerm, $commonDifference)
{
    $progression[] = $initialTerm;
    for ($i = 0; $i < PROGRESSION_LENGTH - 1; $i++) {
        $progression[] = $progression[$i] + $commonDifference;
    }
    return $progression;
}

function calcGame()
{
    $getGameData = function () {
        $initialTerm = rand(0, 100);
        $commonDifference = rand(2, 4);
        $progression = makeProgression($initialTerm, $commonDifference);
        $termKey = rand(0, PROGRESSION_LENGTH - 1);
        $correctAnswer = $progression[$termKey];
        $progression[$termKey] = '..';
        $question = implode(' ', $progression);
        return [$question, (string) $correctAnswer];
    };
    runGame(DESCRIPTION, $getGameData);
}
