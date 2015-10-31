<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/31/15
 * Time: 10:09 AM
 * @param mixed $value
 */

function _e_($value) {
    if (is_array($value)) {
        $value = implode(', ', $value);
    }
    echo "$value\n";
}

function _random_array_($size, $min, $max) {
    $a = [];
    foreach (range(1, $size) as $v) {
        $a[] = rand($min, $max);
    }
    return $a;
}