<?php

function findMin($arr){
    $min = $arr[0];

    for ($i = 1; $i < count($arr); $i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    return $min;
}

$num = [];
for ($i = 0; $i < 100; $i++){
    $num[$i] = rand(1, 101);
}
foreach($num as $nums) {
    echo $nums. " ";
}


function findMax($arr){
    $max = $arr[0];

    for ($i = 1; $i < count($arr); $i++){
        if ($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    return $max;
}


foreach ($num as $nums){
    echo $nums. " ";
}

$minValue = findMin($num);
echo "<br/>";
echo "Min value is: " . $minValue;


$maxValue = findMax($num);
echo "<br/>";
echo "Max value is : ". $maxValue;


