<?php

$page = array();
while ($line = fgets(STDIN)) {
    list($a, $b) = explode(" ", trim($line));
    if (!isset($page[$a])) {
        $page[$a] = array();
    }
    $page[$a][] = $b;
}
ksort($page);
echo "The word and a list of the corresponding page numbers:\n";
foreach ($page as $word => $arr) {
    sort($arr, SORT_NUMERIC);
    echo $word . "\n";
    echo implode($arr, " ") . "\n";
}

