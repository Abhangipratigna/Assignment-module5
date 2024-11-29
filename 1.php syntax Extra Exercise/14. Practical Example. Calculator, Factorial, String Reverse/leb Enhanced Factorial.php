<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculation - Recursive vs Non-Recursive</title>
</head>
<body>

<h1>Factorial Calculation</h1>

<?php

function recursiveFactorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * recursiveFactorial($n - 1);
    }
}

function nonRecursiveFactorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

$largeNumber = 5000;

$startTime = microtime(true);
$recursiveResult = recursiveFactorial($largeNumber);
$endTime = microtime(true);
$recursiveTime = $endTime - $startTime;

$startTime = microtime(true);
$nonRecursiveResult = nonRecursiveFactorial($largeNumber);
$endTime = microtime(true);
$nonRecursiveTime = $endTime - $startTime;

echo "<h2>Factorial of $largeNumber (Recursive): " . $recursiveResult . "</h2>";
echo "<h2>Factorial of $largeNumber (Non-Recursive): " . $nonRecursiveResult . "</h2>";

echo "<p>Recursive calculation time: " . number_format($recursiveTime, 10) . " seconds</p>";
echo "<p>Non-Recursive calculation time: " . number_format($nonRecursiveTime, 10) . " seconds</p>";

?>

</body>
</html>
