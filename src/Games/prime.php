<?php

namespace BrainGames\Prime;

use function \BrainGames\Engine\startGame;

function makeRandProgression()
{
    $progression = [rand(0, 80)];
    for ($i = 0; $i < 10; $i++) {
        $progression[] = $progression[$i] + 2;
    }
    return $progression;
}

function runGame()
{
    $description = "What number is missing in the progression?\n";
    $gameData = function () {
        $progression = makeRandProgression();
        $randKey = rand(0, 9);
        $correctAnswer = $progression[$randKey];
        $progression[$randKey] = '..';
        $question = implode(' ', $progression);
        return ["$question", "$correctAnswer"];
    };
    startGame($description, $gameData);
}
