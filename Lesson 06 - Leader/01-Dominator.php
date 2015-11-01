<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 11/1/15
 * Time: 6:36 PM
 */

include_once '../helper.php';

/**
 * @param array $A
 * @return int
 */
function solution(array $A) {
    $n = count($A);
    $stack_pos = 0;
    $value = -1;

    for ($i = 0; $i < $n; $i++) {
        if ($stack_pos === 0) {
            $stack_pos++;
            $value = $A[$i];
        } else {
            ($value !== $A[$i]) ? $stack_pos-- : $stack_pos++;
        }
    }

    $candidate = -1;
    if ($stack_pos > 0) {
        $candidate = $value;
    }

    $leader_id = -1;
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($A[$i] === $candidate) {
            $leader_id = $i;
            $count++;
        }
    }

    if ($count > (int) $n/2)  {
        return $leader_id;
    }

    return -1;
}

$samples = [
//    2 => [3, 4, 3, 2, 3, -1, 3, 3],
    2 => [1, 2, 1],
];
_run_tests_($samples, 'solution');