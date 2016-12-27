<?php

function loop($a, &$b) {
    if ($a <= $b) {
        return;
    }
    ++$b;
    loop($a--, $b);
}

$a = 5;
$b = 1;
loop($a++, $b);

echo $b; // 5