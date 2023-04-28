<?php
echo php_uname()."<br>";
echo PHP_OS."<br>";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo 'This is a server using Windows!';
} else {
    echo 'This is a server not using Windows!'."<br>";
}
?>