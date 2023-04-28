<?php
function test_bit_position($num, $pos1, $pos2) {
    $pos1--;
    $pos2--;
    $bin_num = strrev(decbin($num));
    if ($bin_num[$pos1] == $bin_num[$pos2]) {
        return "true";
    } else {
        return "false";
    }
}
echo test_bit_position(112,5,6)."\n";
?>
