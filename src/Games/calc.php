<?php

namespace BrainGames\Calc;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function calcGame()
{
    $getGameData = function () {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operator = OPERATORS[rand(0, count(OPERATORS) - 1)];
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
        return [$question, (string) $correctAnswer];
    };
    runGame(DESCRIPTION, $getGameData);
}
