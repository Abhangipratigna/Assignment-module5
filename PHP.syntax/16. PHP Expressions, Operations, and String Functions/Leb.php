<?php

$text = "Hello, welcome to PHP!";
$substring = substr($text, 7, 7); 
echo "Extracted Substring: " . $substring . "<br>";

$string = "PHP is awesome!";
$length = strlen($string); 
echo "Length of string '$string': " . $length . "<br>";

$search = "welcome";
$position = strpos($text, $search); 
if ($position !== false) {
    echo "The word '$search' was found at position: " . $position . "<br>";
} else {
    echo "The word '$search' was not found in the string.<br>";
}
?>