<?php

function valid_email($email)
{
    $result = trim($email);
    if (filter_var($result, FILTER_VALIDATE_EMAIL)) {
        return "True";
    } else {
        return "False";
    }
}

echo valid_email("abc@example.com");
