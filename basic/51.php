<?php
while (($input = trim(fgets(STDIN))) !== '') {
    $input = intval($input);
    $count = 0;
    for ($i=0; $i < 10; $i++) {
        for ($j=0; $j < 10; $j++) {
            for ($k=0; $k < 10; $k++) {
                for ($l=0; $l < 10; $l++) {
                    if ($i + $j + $k +$l === $input) {
                        $count++;
                    }
                }
            }
        }
    }
    echo "\nNumber of combinations of a,b,c and d: ";
    echo $count."\n";
}
?>