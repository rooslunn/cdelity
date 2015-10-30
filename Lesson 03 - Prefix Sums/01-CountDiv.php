<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/30/15
 * Time: 7:38 AM
 *
 * @param int $A
 * @param int $B
 * @param int $K
 * @return int
 */

function solution($A, $B, $K) {
    if ($A > $B) {
        return 0;
    }
    $result = ceil($B - $A)/$K;
    if ($B % $K < $A % $K or $A % $K === 0) {
        $result++;
    }
    return (int) $result;
}

echo solution(6, 11, 2) . PHP_EOL;
echo solution(3, 10, 5) . PHP_EOL;
echo solution(0, 0, 11) . PHP_EOL;
var_dump(solution(1, 1, 11));

/**
Write a function:

function solution($A, $B, $K);

that, given three integers A, B and K, returns the number of integers within the range [A..B] that are divisible by K, i.e.:

{ i : A ≤ i ≤ B, i mod K = 0 }

For example, for A = 6, B = 11 and K = 2, your function should return 3, because there are three numbers divisible by 2 within the range [6..11], namely 6, 8 and 10.

Assume that:

A and B are integers within the range [0..2,000,000,000];
K is an integer within the range [1..2,000,000,000];
A ≤ B.

Complexity:

expected worst-case time complexity is O(1);
expected worst-case space complexity is O(1).
 */