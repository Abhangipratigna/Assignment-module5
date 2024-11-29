<?php

$is_logged_in = false; 

if (!$is_logged_in) {

    header('Location: login.php');
    exit(); 
}

echo "Welcome to the protected page!";

?>
