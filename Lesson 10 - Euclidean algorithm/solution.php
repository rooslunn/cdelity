<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 11/4/15
 * Time: 2:34 PM
 */

include_once '../helper.php';

function gcd($a, $b) {
    if ($a % $b === 0) {
        return $b;
    } else {
        return gcd($b, $a % $b);
    }
}
//_e_(gcd(36, 12));

function solution_ChocolatesByNumbers($N, $M) {
    return $N / gcd($N, $M);
}
_e_(solution_ChocolatesByNumbers(10, 4));