<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/21/15
 * Time: 5:05 PM
 */

function solution($A) {
    $N = count($A);

    $totalSum = array_sum($A);

    $leftSum = $A[0];
    $minDiff = $totalSum;
    for ($i = 1; $i < $N; $i++) {
        $currentDiff = abs($leftSum - ($totalSum - $leftSum));
        if ( $currentDiff < $minDiff) {
            $minDiff = $currentDiff;
        }
        $leftSum += $A[$i];
    }
    return $minDiff;
}