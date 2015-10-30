<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 8/21/15
 * Time: 12:35 PM
 * @param callable $func
 * @param array $params
 */

function printSolution(Callable $func, array $params) {
    $result = call_user_func_array($func, $params);
    echo "Result: {$result}\n";
}

function checkParamRefactoring($value, $value3) {
    $value2 = $value3;
    echo "Value: $value" . $value2;
}