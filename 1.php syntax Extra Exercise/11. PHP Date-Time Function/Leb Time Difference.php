<?php

function calculateTimeDifference($date1, $date2)
 {
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);

    $interval = $datetime1->diff($datetime2);

    return $interval->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds');
}

$today = date('Y-m-d'); 
$nextBirthday = date('Y') . '-07-23';

if (strtotime($nextBirthday) < strtotime($today)) {
    $nextBirthday = (date('Y') + 1) . '-07-23';
}

$timeDifference = calculateTimeDifference($today, $nextBirthday);

echo "Time difference between today and next birthday: " . $timeDifference;


?>
