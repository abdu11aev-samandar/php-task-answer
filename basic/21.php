<form method="get">
    <input type="text" name="n">
    <input type="submit">
</form>

<?php

$n=$_GET['n'];

echo $n >= 10 ? '10 great' : ($n>=20 ? '20 great' : ($n >= 30 ? '30 great' : 'less'));