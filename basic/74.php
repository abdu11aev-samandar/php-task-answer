<?php
$stdin = trim(fgets(STDIN));
echo "Original string: " . $stdin;
$words = preg_split("/[\s,\.]/", $stdin);
$compWords = [];
for ($i = 0; $i < count($words); $i++) {
    if (strlen($words[$i]) > 2 && strlen($words[$i]) < 7) {
        $compWords[] = $words[$i];
    }
}
echo "\nWords  of 3 to 6 characters length: ";
print implode(' ', $compWords) . PHP_EOL;

