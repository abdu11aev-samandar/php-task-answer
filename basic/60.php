<?php

$hoge = [];
while ($hoge[] = trim(fgets(STDIN))) {
}
$hage = array_count_values($hoge);
$max = max($hage);
$koge = array_keys($hage, $max);
echo "Mode values (in ascending order):\n";
sort($koge, SORT_ASC);
foreach ($koge as $val) {
    echo $val . PHP_EOL;
}
?>