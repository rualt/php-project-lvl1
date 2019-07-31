<?php

namespace BrainGames\Calc;

use function \BrainGames\Engine\runGame;

function getRandOperator()
{
    $operators = ['+', '-', '*'];
    $lastKey = count($operators) - 1;
    $randKey = rand(0, $lastKey);
    return $operators[$randKey];
}

function calcGame()
{
    $description = 'What is the result of the expression?';

    $correctAnswer = 0;
    $getGameData = function () {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operator = getRandOperator();
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
