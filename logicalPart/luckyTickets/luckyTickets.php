<?php

function isLucky($num) {

    $str = strval($num);

	$sum1 = intval($str[0]) + intval($str[1]) + intval($str[2]);
	$sum2 = intval($str[3]) + intval($str[4]) + intval($str[5]);

	return $sum1 == $sum2;

}

for ( $i = 100000; $i <= 999999; $i++) {
    if (isLucky($i)) {
        echo "<pre>";
        echo $i;
        echo "<pre>";
    }
}
