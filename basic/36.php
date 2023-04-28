<?php


function str2_in_str1($str1, $str2)
{
    $p_len = strlen($str2);
    $w_len = strlen($str1);
    $w_start = $w_len - $p_len;
    if (substr($str1, $w_start, $p_len) == $str2) {
        return "true";
    } else {
        return "false";
    }
}

echo str2_in_str1("Python", "on") . "\n";
echo str2_in_str1("JavaScript", "php") . "\n";
