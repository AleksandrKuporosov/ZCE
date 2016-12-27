<?php

$var = 10;
$format = "%.2f === %o";
$s = printf($format, $var, $var);
echo $s;

// 10.00 === 1212