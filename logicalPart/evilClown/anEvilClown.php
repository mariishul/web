<?php

function parenthesisRemoval($text){
    $countOpeningBrackets = substr_count($text, '(');
    $countBrackets = substr_count($text, ')');

    if($countOpeningBrackets){

        $pattern = "/[(]{1,}/";
        $replacement = "(";
        $text = preg_replace($pattern, $replacement, $text );
    }

    if($countBrackets){
        $pattern = "/[)]{1,}/";
        $replacement = ")";
        $text = preg_replace($pattern, $replacement, $text );
    }
    return $text;
}



//print_r(parenthesisRemoval($text));