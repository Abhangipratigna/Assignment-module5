<?php

function factorial($num)
{
    if ($num == 0 || $num == 1)
    {
        return 1;
    }
    return $num * factorial($num - 1);
}
if(isset($_POST["submit"]))
{
    $num=$_POST["num"];
    echo "factorial of $num is :" . factorial($num);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <form method="post">
            <input type="method" name="num" placeholder="Enter your factorial">
            <br><br>
            <input type="submit" name="submit" value="submit">
    </center>
    
</body>
</html>