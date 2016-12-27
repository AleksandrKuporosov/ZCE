<?php

try {
    class MyException extends Exception{}
    try {
        throw new MyException('Error');
    } catch (Exception $e) { // <-- catch here
        echo 'Exception';
        throw $e;
    } catch (MyException $e) {
        echo 'MyException';
        throw $e;
    }
} catch (MyException $e) { // <-- and here
    echo get_class($e);
}