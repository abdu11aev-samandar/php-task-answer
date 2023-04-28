<?php
const MAX = 50001;
const COUNT = 5133;
$table = new SplFixedArray(MAX);
$table[0] = $table[1] = false;
$primes = new SplFixedArray(COUNT);
$p_i = 0;
$i = 2;
while ($i < MAX) {
    $primes[$p_i++] = $i;
    $table[$i] = true;
    for ($j = $i * 2; $j < MAX; $j += $i) {
        $table[$j] = false;
    }
    while (++$i < MAX && $table[$i] == false) ;
}
while (true) {
    fscanf(STDIN, '%d', $n);
    if ($n == 0) {
        break;
    }
    $c = 0;
    for ($i = 0; $i < COUNT; $i++) {
        if ($primes[$i] > $n / 2) {
            break;
        }
        if ($table[$n - $primes[$i]]) {
            $c++;
        }
    }
    echo "Number of combinations: ";
    echo $c . PHP_EOL;
}

?>