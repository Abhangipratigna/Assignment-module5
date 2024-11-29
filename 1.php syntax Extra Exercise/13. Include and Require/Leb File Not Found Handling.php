<?php

$file = 'critical_file.php';

if (!file_exists($file)) 
{

    die('Error: The critical file is missing. Please contact support.');
} 
else 
{

    require $file;
}

?>