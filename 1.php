<?php

class Car
{
    public function __toString()
    {
        echo 'My content';
    }
}

$oCar = new Car();
echo $oCar;

/**
 * Fatal error because __toString must return string
 */