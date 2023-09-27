<?php

$grades = [85, 92, 78, 88, 95];

function sortedValue($value)
{
    rsort($value);
    print_r($value);
}

sortedValue($grades);
