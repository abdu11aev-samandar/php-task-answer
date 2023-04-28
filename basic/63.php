<?php

$str = trim(fgets(STDIN));
$str = str_replace(array('Python', 'PHP'), array('@ython', 'Python'), $str);
echo str_replace('@ython', 'PHP', $str), PHP_EOL;
