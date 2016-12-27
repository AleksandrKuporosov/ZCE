<?php

$a = 100;
function a($b = 1) {
    $a = 0;
    global $a; // <-- rewrite local context
    return $a / 10 * $b;
}

echo a(A());