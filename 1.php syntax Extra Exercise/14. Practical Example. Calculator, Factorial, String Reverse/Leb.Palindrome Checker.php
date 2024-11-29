<?php

function isPalindrome($str) {

    $str = preg_replace("/[^a-zA-Z0-9]/", "", $str);
    $str = strtolower($str);
    
    $reversedStr = strrev($str);
    
    return $str === $reversedStr;
}

$inputString = "A man, a plan, a canal, Panama";

if (isPalindrome($inputString)) 
{
    echo "$inputString is a palindrome.";
} 
else 
{
    echo "$inputString is not a palindrome.";
}

?>
