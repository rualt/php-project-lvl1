<?php

namespace BrainGames\Progression;

use function \BrainGames\Engine\runGame;

function makeRandProgression()
{
    $progression = [rand(0, 80)];
    $difference = rand(2, 4);
    for ($i = 0; $i < 10; $i++) {
        $progression[] = $progression[$i] + $difference;
    }
    return $progression;
}

function calcGame()
{
    $description = 'What number is missing in the progression?';
    $getGameData = function () {
        $progression = makeRandProgression();
        $randKey = rand(0, 9);
        $correctAnswer = $progression[$randKey];
        $progression[$randKey] = '..';
        $question = implode(' ', $progression);
        return ["$question", "$correctAnswer"];
    };
    runGame($description, $getGameData);
}
