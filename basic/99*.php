<?php

function memoize($func): Closure
{
    return function () use ($func) {
        static $cache = [];

        $args = func_get_args();
        $key = serialize($args);
        $cached = true;

        if (!isset($cache[$key])) {
            $cache[$key] = $func(...$args);
            $cached = false;
        }
        return ['result' => $cache[$key], 'cached' => $cached];
    };
}

$memorized = memoize(
    function ($num) {
        return $num + 10;
    }
);

var_dump($memorized(5));