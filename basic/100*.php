<?php

function once($func): Closure
{
    return function (...$args) use ($func) {
        static $called = false;
        if ($called) {
            return;
        }
        $called = true;
        return $func(...$args);
    };
}

$add = function ($a, $b) {
    return $a + $b;
};

$once = once($add);

var_dump($once(10, 5));