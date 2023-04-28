<?php

function dec($string, $upperRest = false)
{
    return lcfirst($upperRest ? strtoupper($string) : $string);
}

print_r(dec('Python'));