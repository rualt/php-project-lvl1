<?php

namespace BrainGames\Calc;

use function \cli\line;
use function \cli\prompt;

function isEven($number)
{
    return $number % 2 === 0 ? 'yes' : 'no';
}

function sayYes()
{
    line("Correct!");
}

function sayNo($ansver, $number)
{
    $correctAnsver = isEven($number);
    line("'{$ansver}' is wrong ansver ;(. Correct answer was '{$correctAnsver}'.");
}

function run()
{
    line("Welcome to the Brain Games!");
    line("Answer \"yes\" if number even otherwise answer \"no\".\n");
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    for ($i = 0; $i < 3;) {
        $number = rand(0, 100);
        line("Question: $number");
        $ansver = prompt('Your answer');
        if (isEven($number) === $ansver) {
            sayYes();
            $i++;
        } else {
            sayNo($ansver, $number);
        }
    }
    line("\nCongratulations, $name!");
}
