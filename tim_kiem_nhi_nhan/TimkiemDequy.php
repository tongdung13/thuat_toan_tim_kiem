<?php

function binarySearch($number, $needle, $low, $high)
{
    if ($high < $low){
        return false;
    }

    $mid = (int) (($low + $high) / 2);

    if ($number[$mid] > $needle) {
        return binarySearch($number, $needle, $low , $mid -1);
    } elseif ($number[$mid] < $needle) {
        return binarySearch($number, $needle, $mid + 1, $high);
    }else {
        return true;
    }
}

$number = range(1,200,5);

$numbers = 31;
if (binarySearch($number,$numbers,0,count($number) - 1) !== false) {
    echo "$numbers Dung \n";
}else {
    echo "$numbers Tong \n";
}

$numbers = 500;
if (binarySearch($number, $numbers,0,count($number) - 1) !== false){
    echo "$numbers Dung \n";
} else {
    echo "$numbers Tong \n";
}
