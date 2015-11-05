<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 11/4/15
 * Time: 8:55 AM
 */

include_once '../helper.php';

/**
 * Prepare sieve for factorization
 *
 * @param int $n
 * @return array
 */
function arrayF($n) {
    $f = array_fill(0, $n + 1, 0);
    $i = 2;
    while ($i * $i <= $n) {
        if ($f[$i] === 0) {
            $k = $i * $i;
            while ($k <= $n) {
                if ($f[$k] === 0) {
                    $f[$k] = $i;
                }
                $k += $i;
            }
        }
        $i++;
    }
    return $f;
}
//_e_(arrayF(20));

/**
 * Factorization of $x
 *
 * @param int $x - number to factorize
 * @param array $f - preapared sieve for factorization (see arrayF functionO
 * @return array
 */
function factorization($x, array $f) {
    $prime_factors = [];
    while ($f[$x] > 0) {
        $prime_factors[] = $f[$x];
        $x /= $f[$x];
    }
    $prime_factors[] = $x;
    return $prime_factors;
}

//$x = 20;
//_e_(factorization($x, arrayF($x)));

/**
 * Returns all primes <= $n (Sieve of Erathosthenes)
 *
 * @param int $n
 * @return array
 */
function sieve($n) {
    $sieve = array_fill(0, $n + 1, true);
    $sieve[0] = $sieve[1] = false;
    $i = 2;
    while ($i * $i <= $n) {
        if ($sieve[$i]) {
            $k = $i * $i;
            while ($k <= $n) {
                $sieve[$k] = false;
                $k += $i;
            }
        }
        $i++;
    }
    $result = [];
    foreach ($sieve as $i => $is_prime) {
        if ($is_prime) {
            $result[] = $i;
        }
    }
    return $result;
}

//_e_(sieve(30));

/**
 * @param int $N
 * @param array $P
 * @param array $Q
 * @return array
 */
function solution_CountSemiprimes($N, array $P, array $Q) {
    $f = array_fill(0, $N + 1, 0);
    $i = 2;
    while ($i * $i <= $N) {
        if ($f[$i] === 0) {
            $k = $i * $i;
            while ($k <= $N) {
                if ($f[$k] === 0) {
                    $f[$k] = $i;
                }
                $k += $i;
            }
        }
        $i++;
    }

    $semi_primes = [];
    for ($i = 0; $i < $N + 1; $i++) {
        $factors_count = 0;
        $k = $i;
        while ($f[$k] > 0) {
            $factors_count++;
            $k /= $f[$k];
        }
        $semi_primes[$i] = 0;
        if (++$factors_count === 2) {
            $semi_primes[$i] = 1;
        }
    }
//    return $semiprimes;

    $result = [];
    for ($i = 0, $m = count($P); $i < $m; $i++) {
        if ($Q[$i] <= $N) {
            $range = array_slice($semi_primes, $P[$i], $Q[$i]-$P[$i]+1);
            $result[] = array_sum($range);
        }
    }
    return $result;
}
_e_(solution_CountSemiprimes(26, [1, 4, 16], [26, 10, 20]));