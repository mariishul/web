<?php
function reverseStr($str)
{
    $reverseStr = '';
    for ($i = mb_strlen($str); $i >= 0; $i--) {
        $reverseStr .= mb_substr($str, $i, 1);
    }
    return $reverseStr;

}
print_r(reverseStr('Привет мир!11'));
