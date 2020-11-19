<?php


function elementCount($numbers, $value){
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++){
        if($numbers[$i] == $value){
            $count++;
        }
    }
    return $count;
}

echo elementCount([1,2,3,4,1,2,3,4],1);

