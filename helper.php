<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/31/15
 * Time: 10:09 AM
 * @param mixed $value
 */


assert_options(ASSERT_ACTIVE, true);
assert_options(ASSERT_WARNING, false);
assert_options(ASSERT_QUIET_EVAL, true);
assert_options(ASSERT_BAIL, true);

/**
 * Custom handler for assertions
 *
 * @param $file
 * @param $line
 * @param $code
 * @param null $desc
 */
function _assert_handler_($file, $line, $code, $desc = null)
{
//    echo "Assertion failed at $line: $code";
    if ($desc) {
        echo "$desc\n";
    }
//    echo PHP_EOL;
}

assert_options(ASSERT_CALLBACK, '_assert_handler_');

/**
 * Prints any value for debugging
 *
 * @param mixed $value
 */
function _e_($value) {
    if (is_array($value)) {
        $value = implode(', ', $value);
    }
    echo "$value\n";
}

/**
 * Creates random integer array
 *
 * @param int $size
 * @param int $min
 * @param int $max
 * @return array
 */
function _random_array_($size, $min, $max) {
    $a = [];
    for ($i = 1; $i <= $size; $i++) {
        $a[] = rand($min, $max);
    }
    return $a;
}

function _run_tests_(array $samples, callable $solution) {
    $i = 1;
    foreach ($samples as $expected => $params) {
        $got = $solution($params);
        assert($got === $expected, "Sample $i failed. Expected: $expected; Received: $got");
        $i++;
    }
}