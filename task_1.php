<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modification($input)
{
    $lowercase = strtolower($input);
    $replaced = str_replace("brown", "red", $lowercase);
    echo "Modified text : {$replaced}";
}

echo modification($text);
