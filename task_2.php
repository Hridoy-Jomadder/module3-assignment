<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removingEvenNumber($n)
{
    $result = [];
    foreach ($n as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }

    print_r($result);
}

removingEvenNumber($numbers);
