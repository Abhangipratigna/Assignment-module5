<?php

$globalVar = "I am a global variable.";

function testScope()
 {
    $localVar = "I am a local variable.";

    global $globalVar;

    echo "Inside the function: <br>";
    echo "Global Variable: $globalVar <br>";
    echo "Local Variable: $localVar <br><br>";
}

testScope();

echo "Outside the function: <br>";
echo "Global Variable: $globalVar <br>";

?>
