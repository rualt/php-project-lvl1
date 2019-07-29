<?php

namespace BrainGames\Calc;

use function \BrainGames\Engine\startGame;

function runGame()
{
    $description = 'What is the result of the expression?';

    $correctAnswer = 0;
    $gameData = function () {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operators = ['+', '-', '*'];
        $operator = $operators[rand(0, 2)];
        $question = "{$num1} {$operator} {$num2}";
        if ($operator == '+') {
            $correctAnswer = $num1 + $num2;
        } elseif ($operator == '-') {
            $correctAnswer = $num1 - $num2;
        } else {
            $correctAnswer = $num1 * $num2;
        }
        return ["$question", "$correctAnswer"];
    };
    startGame($description, $gameData);
}
