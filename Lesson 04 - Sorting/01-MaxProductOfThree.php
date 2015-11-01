<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/31/15
 * Time: 5:44 PM
 */

include_once '../helper.php';

/**
 * @param array $a
 * @return number
 */
function solution(array $a) {
    sort($a);
    $n = count($a);
    $max2 = $a[$n-1]*$a[0]*$a[1];
    $max3 = $a[$n-1]*$a[$n-2]*$a[$n-3];
    return max($max2, $max3);
}

$samples = [
    60  => [-3, 1, 2, -2, 5, 6],
    125 => [-5, 5, -5, 4],
    -80 => [-10, -2, -4],
    120 => [-4, -6, 3, 4, 5],
];

foreach ($samples as $expected => $params) {
    $got = solution($params);
    assert($got === $expected, "Failed. Expected: $expected; Received: $got");
}

_e_('Good job, Russ!');

/**
A non-empty zero-indexed array A consisting of N integers is given. The product of triplet (P, Q, R) equates to A[P] * A[Q] * A[R] (0 ≤ P < Q < R < N).

For example, array A such that:

A[0] = -3
A[1] = 1
A[2] = 2
A[3] = -2
A[4] = 5
A[5] = 6
contains the following example triplets:

(0, 1, 2), product is −3 * 1 * 2 = −6
(1, 2, 4), product is 1 * 2 * 5 = 10
(2, 4, 5), product is 2 * 5 * 6 = 60
Your goal is to find the maximal product of any triplet.

Write a function:

int solution(int A[], int N);

that, given a non-empty zero-indexed array A, returns the value of the maximal product of any triplet.

For example, given array A such that:

A[0] = -3
A[1] = 1
A[2] = 2
A[3] = -2
A[4] = 5
A[5] = 6
the function should return 60, as the product of triplet (2, 4, 5) is maximal.

Assume that:

N is an integer within the range [3..100,000];
each element of array A is an integer within the range [−1,000..1,000].
Complexity:

expected worst-case time complexity is O(N*log(N));
expected worst-case space complexity is O(1), beyond input storage (not counting the storage required for input arguments).
Elements of input arrays can be modified.
 */