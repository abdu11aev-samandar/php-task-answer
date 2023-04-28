<?php

$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

$url = parse_url($url);

echo 'Scheme : ' . $url['scheme'] . "\n";


if (!empty($_SERVER['HTTPS'])) {
    echo 'https is enabled';
} else {
    echo 'http is enabled' . "\n";
}
