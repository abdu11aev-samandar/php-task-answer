<form method="get">
    <input type="text" name="num">
    <input type="submit">
</form>

<?php

function armstrong_number($num)
{
    $l = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $l; $i++) {
        $sum += pow($num[$i], $l);
    }
    if ((string)$sum == (string)$num) {
        return "True";
    } else {
        return "False";
    }
}

echo "Is " . $_GET['num'] . " Armstrong number? " . armstrong_number($_GET['num']);


