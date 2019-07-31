<?php

namespace BrainGames\Calc;

use function \BrainGames\Engine\runGame;

const OPERATORS = ['+', '-', '*'];

function calcGame()
{
    $description = 'What is the result of the expression?';

    $correctAnswer = 0;
    $getGameData = function () {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $randKey = rand(0, count(OPERATORS) - 1);
        $operator = OPERATORS[$randKey];
        $question = "$num1 $operator $num2";
        switch ($operator) {
            case '+':
                $correctAnswer = $num1 + $num2;
                break;
            case '-':
                $correctAnswer = $num1 - $num2;
                break;
            case '*':
                $correctAnswer = $num1 * $num2;
                break;
        }
        return [$question, "$correctAnswer"];
    };
    runGame($description, $getGameData);
}
