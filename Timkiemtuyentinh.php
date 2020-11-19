<?php


function search($number, $needle)
{
    $totalItems = count($number);

    for($i = 0; $i < $totalItems; $i++) {
        if ($number[$i] === $needle) {
            return true;
        }

    }
    return false;
}

$number = range(1, 200, 6);

if (search($number, 31)){
    echo "dung";
} else {
    echo "tong";
}
