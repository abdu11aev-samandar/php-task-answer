<?php

$x = array();
while (true) {
    $a = rtrim(fgets(STDIN));
    if ($a === '') {
        break;
    }
    list($n, $d) = explode(',', $a);
    if (!isset($x[$n])) {
        $x[$n] = 0;
    }
    $x[$n]++;
}

$y = array();
while (true) {
    $a = rtrim(fgets(STDIN));
    if ($a == '') {
        break;
    }
    list($n, $d) = explode(',', $a);
    if (!isset($x[$n])) {
        continue;
    }
    if (!isset($y[$n])) {
        $y[$n] = $x[$n];
    }
    $y[$n]++;
}
echo "Customer number and the number of transactions:\n";
ksort($y);
foreach ($y as $k => $v) {
    echo sprintf('%d %d', $k, $v) . PHP_EOL;
}

