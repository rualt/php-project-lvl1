<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

function sayNo($answer, $correctAnswer, $name)
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
    line("Let's try again, $name!");
}

function startGame($description, $gameData)
{
    line("Welcome to the Brain Games!");
    line("$description\n");
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    for ($i = 0; $i < 3; $i++) {
        [$question, $correctAnswer] = $gameData();
        line("Question: $question");
        $answer = prompt('Your answer');
        if ($correctAnswer === $answer) {
            line("Correct!");
        } else {
            return sayNo($answer, $correctAnswer, $name);
        }
    }
    return line("\nCongratulations, $name!");
}
