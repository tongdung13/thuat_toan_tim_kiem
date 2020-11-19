<?php

function binarySearch($number,$needle){
    $low = 0;
    $high = count($number)-1;
    while($low <= $high){
        $mid = (int) (($low + $high) / 2);

        if ($number[$mid] > $needle) {
            echo "so toi nghi nho hon: ". $number[$mid]."<br/>";
            $high = $mid - 1;
        } elseif ($number[$mid] < $needle){
            echo "so toi nghi lon hon: ".$number[$mid]. "<br/>";
            $low = $mid +1;
        } else{
            return true;
        }
    }
    return false;
}
$numbers = rand(1,100);
echo "so toi nghi: " .$numbers. "<br/>";
$number = range(1,200,1);

if (binarySearch($number, $numbers)){
    echo "$numbers : tro choi ket thuc \n";
}else {
    echo "$numbers Tong \n";
}
