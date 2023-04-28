<?php
fscanf(STDIN, '%d', $n);
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, '%s', $s);
    $s = str_split($s);
    rsort($s);
    $a = (int)implode('', $s);
    sort($s);
    $b = (int)implode('', $s);
    echo "Difference between the largest integer and the smallest integer:\n";
    echo $a - $b;
    echo PHP_EOL;
}