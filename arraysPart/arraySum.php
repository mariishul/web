<?php

function arraySum(array $arr){
    $sum = null;

    foreach($arr as $child){
        $sum += is_array($child) ? arraySum($child):$child;
    }
    return $sum;
}

$arr = [1, 4, 5,[1, 5, 8,[4, 5, 7, 8, 9, 10]]];

echo arraySum($arr);