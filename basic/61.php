<?php
$str = trim(fgets(STDIN));
$arr = explode(' ', $str);
$arr2 = array_count_values($arr);
$word1 = array_search(max($arr2), $arr2);
$word2 = '';
foreach ($arr as $s) {
    if (strlen($s) > strlen($word2)) {
        $word2 = $s;
    }
}
printf("%s %s\n", $word1, $word2);