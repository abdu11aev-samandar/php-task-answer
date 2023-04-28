<?php
fscanf(STDIN, '%d', $n);
$debt = 100000;

for($i=0; $i<$n; $i++){
    $debt = ceil(($debt * 1.05)/1000) * 1000;
}
echo "\nAmount of debt: ";
echo $debt. PHP_EOL;
