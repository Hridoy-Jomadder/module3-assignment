<?php

function generatePassword($length)
{
    $data = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+";
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, strlen($data) - 1);
        $password .= $data[$randomIndex];
    }

    return $password;
}

echo generatePassword(12);
