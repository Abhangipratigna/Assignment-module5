<?php

function reversestring($string)
{
    $reversed = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--)
    {
        $reversed .= $string[$i];
    }
    return $reversed;
}

if(isset($_POST["submit"]))

{
    $string=$_POST["string"];
    echo "reversestring is $string :" . reversestring($string);

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

</head>

<body>
    <center>
        <form method="post">
            <input type="method" name="string" placeholder="Enter your string">
            <br><br>
            <input type="submit" name="submit" value="submit">
    </center>
</body>

</html>