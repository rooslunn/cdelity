<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/31/15
 * Time: 9:53 AM
 */

include_once '../helper.php';

/**
 * @param array $A
 * @return int
 */
function solution($A) {
    $n = count($A);

    $min_avg = ($A[0] + $A[1]) / 2.0;
    $min_avg_pos = 0;

    foreach (range(0, $n - 3) as $i) {
        $curr_avg = ($A[$i] + $A[$i+1])/2.0;
        if ($curr_avg  < $min_avg) {
            $min_avg = $curr_avg;
            $min_avg_pos = $i;
        }
        $curr_avg = ($A[$i] + $A[$i+1] + $A[$i+2]) / 3.0;
        if ($curr_avg < $min_avg) {
            $min_avg = $curr_avg;
            $min_avg_pos = $i;
        }
    }
    $curr_avg = ($A[$n-2] + $A[$n-3]) / 2.0;
    if ($curr_avg < $min_avg) {
        $min_avg_pos = $n - 2;
    }

    return $min_avg_pos;
}

$sample = [4, 2, 2, 5, 1, 5, 8];
//_e_($sample);
_e_(solution($sample));

$sample = _random_array_(100000, -10000, 10000);
//_e_($sample);
_e_(solution($sample));

$sample = _random_array_(700, -10000, 10000);
//_e_($sample);
_e_(solution($sample));

//$sample = [-3, -5, -8, -4, -10];
//_e_($sample);
//_e_(solution($sample));


/**
A non-empty zero-indexed array A consisting of N integers is given. A pair of integers (P, Q), such that 0 ≤ P < Q < N, is called a slice of array A (notice that the slice contains at least two elements). The average of a slice (P, Q) is the sum of A[P] + A[P + 1] + ... + A[Q] divided by the length of the slice. To be precise, the average equals (A[P] + A[P + 1] + ... + A[Q]) / (Q − P + 1).

For example, array A such that:

A[0] = 4
A[1] = 2
A[2] = 2
A[3] = 5
A[4] = 1
A[5] = 5
A[6] = 8
contains the following example slices:

slice (1, 2), whose average is (2 + 2) / 2 = 2;
slice (3, 4), whose average is (5 + 1) / 2 = 3;
slice (1, 4), whose average is (2 + 2 + 5 + 1) / 4 = 2.5.
The goal is to find the starting position of a slice whose average is minimal.

Write a function:

function solution($A);

that, given a non-empty zero-indexed array A consisting of N integers, returns the starting position of the slice with the minimal average. If there is more than one slice with a minimal average, you should return the smallest starting position of such a slice.

For example, given array A such that:

A[0] = 4
A[1] = 2
A[2] = 2
A[3] = 5
A[4] = 1
A[5] = 5
A[6] = 8
the function should return 1, as explained above.

Assume that:

N is an integer within the range [2..100,000];
each element of array A is an integer within the range [−10,000..10,000].
Complexity:

expected worst-case time complexity is O(N);
expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).
Elements of input arrays can be modified.
 */