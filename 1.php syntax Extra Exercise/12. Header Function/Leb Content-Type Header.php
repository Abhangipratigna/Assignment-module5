<?php

$send_json = true; 

if ($send_json) 
{
    header('Content-Type: application/json');
    
    $response = array(
        "status" => "success",
        "message" => "This is a JSON response"
    );

    echo json_encode($response);
} 
else 
{
    header('Content-Type: text/plain');
    
    $response = "This is a plain text response";
    
    echo $response;
}

?>
