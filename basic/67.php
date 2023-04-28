<?php

while (($line = trim(fgets(STDIN))) !== '') {
    $n = (int)$line;
    $result = 2;
    for ($i = 2; $i <= $n; $i++) {
        $result += $i;
    }
    echo 'Maximum number of regions: ';
    echo $result, PHP_EOL;
}