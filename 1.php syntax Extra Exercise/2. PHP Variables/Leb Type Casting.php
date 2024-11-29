<?php

$integerVar = 10;
$floatVar = 15.5;
$stringVar = "123";
$booleanVar = true;

echo "Before Conversion:\n";
echo "Integer Value: $integerVar, Type: " . gettype($integerVar) . "<br>";
echo "Float Value: $floatVar, Type: " . gettype($floatVar) . "<br>";
echo "String Value: $stringVar, Type: " . gettype($stringVar) . "<br>";
echo "Boolean Value: $booleanVar, Type: " . gettype($booleanVar) . "<br> <br>";

$integerToFloat = (float)$integerVar; 
$floatToInt = (int)$floatVar; 
$stringToInt = (int)$stringVar; 
$booleanToString = (string)$booleanVar;

echo "\nAfter Conversion:\n";
echo "Integer to Float: $integerToFloat, Type: " . gettype($integerToFloat) . "<br>";
echo "Float to Integer: $floatToInt, Type: " . gettype($floatToInt) . "<br>";
echo "String to Integer: $stringToInt, Type: " . gettype($stringToInt) . "<br>";
echo "Boolean to String: $booleanToString, Type: " . gettype($booleanToString) . "<br>";

?>
