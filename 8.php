<?php

namespace Foo;

function strlen(){}
const INI_ALL = 3;

$a = strlen('hi');
$b = INI_ALL;
try {
    if ($a == 2)
        echo INI_ALL;
    else
        throw new Exception('error');
} catch (Exception $e) {
    echo $e->getMessage();
}

/**
 * Fatal error: Foo\Exception not found
 */