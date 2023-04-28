<?php
fscanf(STDIN, '%d', $n);
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, '%f %f %f %f %f %f %f %f', $x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4);
    $pq = INF;
    if ($x2 - $x1 !== 0.0) {
        $pq = ($y2 - $y1) / ($x2 - $x1);
    }
    $rs = INF;
    if ($x4 - $x3 !== 0.0) {
        $rs = ($y4 - $y3) / ($x4 - $x3);
    }
    echo $pq === $rs ? 'PQ and RS are parallel.' : 'PQ and RS are not parallel.';
    echo PHP_EOL;
}
?>