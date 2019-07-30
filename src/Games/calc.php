<?php

namespace BrainGames\Calc;

use function \BrainGames\Engine\startGame;

function getRandOperator()
{
    $operators = ['+', '-', '*'];
    $lastKey = count($operators) - 1;
    $randKey = rand(0, $lastKey);
    return $operators[$randKey];
}

function runGame()
{
    $description = 'What is the result of the expression?';

    $correctAnswer = 0;
    $gameData = function () {
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
        return ["$question", "$correctAnswer"];
    };
    startGame($description, $gameData);
}
