<?php

function counter($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}

print_r(counter('exampleInput'));