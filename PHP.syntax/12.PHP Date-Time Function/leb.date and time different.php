<?php

echo"Today is".date("d/m/y")."<br>";
echo"Today is".date("d-m-y")."<br>";
echo"Today is".date("d.m.y")."<br>";

date_default_timezone_set("Asia/Calcutta");
echo"The time is it :".date("H:i:s a")."<br>";
echo"The time is it :".date("h:i:s a");

?>


