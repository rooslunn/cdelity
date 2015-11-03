<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 11/2/15
 * Time: 7:02 PM
 */

include_once '../helper.php';

/**
 * @param array $A
 * @return int
 */
function slow_solution(array $A) {
    $profit = 0;
    $n = count($A);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($k = $i+1; $k < $n; $k++) {
            $profit = max($profit, $A[$k] - $A[$i]);
        }
    }
    return $profit;
}

/**
 * @param array $A
 * @return int
 */
function fast_solution(array $A) {
    $max_profit = $slice_profit = 0;
    for ($i = 1, $n = count($A); $i < $n; $i++) {
        $slice_profit = max(0, $slice_profit + $A[$i] - $A[$i-1]);
        $max_profit = max($max_profit, $slice_profit);
    }
    return $max_profit;
}

$samples = [
    356 => [23171, 21011, 21123, 21366, 21013, 21367],
    20  => [10, 15, 14, 20, 30],
];
_run_tests_($samples, 'fast_solution');
echo "Good job, Russ!";