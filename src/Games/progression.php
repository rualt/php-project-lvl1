<?php

namespace BrainGames\Progression;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_TERMS_COUNT = 10;

function makeProgression($initialTerm, $commonDifference)
{
    $progression[] = $initialTerm;
    for ($i = 1; $i < PROGRESSION_TERMS_COUNT; $i++) {
        $progression[] = $progression[$i - 1] + $commonDifference;
    }
    return $progression;
}

function makeGame()
{
    $getGameData = function () {
        $initialTerm = rand(0, 100);
        $commonDifference = rand(1, 10);
        $progression = makeProgression($initialTerm, $commonDifference);
        $termKey = rand(0, PROGRESSION_TERMS_COUNT - 1);
        $correctAnswer = $progression[$termKey];
        $progression[$termKey] = '..';
        $question = implode(' ', $progression);
        return [$question, (string) $correctAnswer];
    };
    runGame(DESCRIPTION, $getGameData);
}
