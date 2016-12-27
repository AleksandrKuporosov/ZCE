<?php

$a = 'myVar';

switch ($a) {
    case 0:
        echo 'case 0';
    case 'myVar':
        echo 'case myVar';
    case 'nothing':
        echo 'case nothing';
}

/**
 * Will be affected all cases because $a will be casted to int and equal to 0
 */