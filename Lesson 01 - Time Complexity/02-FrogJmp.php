<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/21/15
 * Time: 5:22 PM
 * @param $X
 * @param $Y
 * @param $D
 * @return int
 */

function solution($X, $Y, $D) {
    return (int) ceil(($Y-$X)/$D);
}