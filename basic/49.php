<?php
function to_f($e)
{
    return (float)$e;
}

while ($line = fgets(STDIN)) {
    $a = explode(" ", $line);
    $a = array_map("to_f", $a);
    $x = ($a[2] * $a[4] - $a[1] * $a[5]) / ($a[0] * $a[4] - $a[3] * $a[1]);
    $y = ($a[2] * $a[3] - $a[0] * $a[5]) / ($a[1] * $a[3] - $a[0] * $a[4]);
    print("Values of x and y:\n");
    printf("%.3f %.3f\n", $x, $y);
}
?>