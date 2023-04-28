<?php
while (($line = trim(fgets(STDIN))) !== '0') {
    $n = (int)$line;
    $arr = array_fill(0, $n + 1, array_fill(0, $n + 1, 0));
    for ($i = 0; $i < $n; $i++) {
        $line = trim(fgets(STDIN));
        foreach (explode(' ', $line) as $j => $m) {
            $m = (int)$m;
            $arr[$i][$j] = $m;
            $arr[$i][$n] += $m;
            $arr[$n][$j] += $m;
        }
    }
    $arr[$n][$n] = array_sum($arr[$n]);
    echo "The table with sum of rows and columns:\n";

    for ($i = 0; $i <= $n; $i++) {
        for ($j = 0; $j <= $n; $j++) {
            printf('%5d', $arr[$i][$j]);
        }
        echo PHP_EOL;
    }
}
