<?php
$stdin = trim(fgets(STDIN));
$nums = explode(" ", $stdin);
rsort($nums);
print("After sorting the said integers:\n");
echo implode(' ', $nums);
