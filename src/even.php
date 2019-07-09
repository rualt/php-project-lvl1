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

function sayNo()
{
    line("Sorry, that's incorrect, try again");
}

function run()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".');
    
    $name = prompt('May I have your name?');
    line("Hello, $name!");

    $correctAnsv = 0;
    $num = rand(0, 100);
    while ($correctAnsv != 3) {
        $num = rand(0, 100);
        $ansver = prompt("Question: $num");
        if (isEven($num) === $ansver) {
            sayYes();
            $correctAnsv += 1;
        } else {
            sayNo();
        }
    }
    line("Congratulations, $name!");
}
