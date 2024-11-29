<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Sunday Script</title>
</head>
<body>

<?php

function getDayInTimeZone($timezone) 
{

    $dateTimeZone = new DateTimeZone($timezone);
    $dateTime = new DateTime("now", $dateTimeZone);
    
    $dayOfWeek = $dateTime->format('w');

    if ($dayOfWeek == 0) {
        echo "<h2>Happy Sunday!</h2>";
    } else {
        echo "<h2>Today is not Sunday.</h2>";
    }
}

$timeZones = ['America/New_York', 'Europe/London', 'Asia/Tokyo'];

foreach ($timeZones as $timeZone) {
    echo "<h3>Time in $timeZone:</h3>";
    getDayInTimeZone($timeZone);
    echo "<br>";
}
?>

</body>
</html>
