<?php

$heights = array();

while ($line = fgets(STDIN)) {
    $heights[] = (int)$line;
}

rsort($heights);

print("Heights of the top three buildings:\n");

echo $heights[0] . "\n";
echo $heights[1] . "\n";
echo $heights[2] . "\n";