<?php

function compose(...$funcs): Closure
{
    return array_reduce(
        $funcs,
        function ($carry, $func) {
            return function ($x) use ($carry, $func) {
                return $func($carry($x));
            };
        },
        function ($x) {
            return $x;
        }
    );
}

$compose = compose(
    // add 2
    function ($x) {
        return $x + 2;
    },
    // multiply 4
    function ($x) {
        return $x * 4;
    }
);

print_r($compose(2));
print_r($compose(2));