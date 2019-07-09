<?php

namespace BrainGames\Even;

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

function sayNo($ansver)
{
    line("'$ansver' is wrong ansver ;(. Correct answer was 'no'.");
}

function run()
{
    line("Welcome to the Brain Games!");
    line("Answer \"yes\" if number even otherwise answer \"no\".\n");
    $name = prompt('May I have your name?');
    line("Hello, $name!");

    for ($i = 0; $i < 3;) {
        $num = rand(0, 100);
        line("Question: $num");
        $ansver = prompt('Your answer');
        if (isEven($num) === $ansver) {
            sayYes();
            $i++;
        } else {
            sayNo($ansver);
        }
    }
    line("\nCongratulations, $name!");
}
