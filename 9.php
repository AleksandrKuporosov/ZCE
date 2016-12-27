<?php

function fibo($a, $b, $step) {
    if ($step > 0) {
        --$step;
        return fibo($b, $a + $b, $step);
    } else {
        return $b;
    }
}

echo fibo(0, 1, 5); // 8