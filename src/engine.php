<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const GAME_ROUND = 3;

function runGame($description, $getGameData)
{
    line("Welcome to the Brain Games!");
    line("$description\n");
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    for ($i = 0; $i < GAME_ROUND; $i++) {
        [$question, $correctAnswer] = $getGameData();
        line("Question: $question");
        $answer = prompt('Your answer');
        if ($correctAnswer === $answer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, $name!");
            exit;
        }
    }
    line("Congratulations, $name!");
}
