<?php

function binarySearch($number,$needle){
    $low = 0;
    $high = count($number)-1;
    while($low <= $high){
        $mid = (int) (($low + $high) / 2);

        if ($number[$mid] > $needle) {
            $high = $mid - 1;
        } elseif ($number[$mid] < $needle){
            $low = $mid +1;
        } else{
            return true;
        }
    }
    return false;
}

$number = range(1,200,5);
$numbers = 31;
if (binarySearch($number, $numbers)){
    echo "$numbers Dung \n";
}else {
    echo "$numbers Tong \n";
}

$numbers = 500;
if (binarySearch($number, $numbers)){
    echo "$numbers Dung \n";
} else {
    echo "$numbers Tong \n";
}