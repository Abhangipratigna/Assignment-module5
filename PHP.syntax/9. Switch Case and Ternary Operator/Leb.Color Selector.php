<?php

if(isset($_POST["submit"]))
{
    $name=$_POST["color"];

    if($name=='red')
    {
        echo "<h2 align='center' style='color:red'>red color selected</h2>";
    }
    else if($name=='green')
    {
        echo "<h2 align='center' style='color:green'>green color selected</h2>";
    }
    else if($name=='blue')
    {
        echo "<h2 align='center' style='color:blue'>blue color selected</h2>";
    }
 
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

            <select name="color">
                <option value="red">red</option>
                <option value="green">green</option>
                <option value="blue">blue</option>
            </select>
            <input type="submit" name="submit" value="submit">
        </form>
    </center>
</body>

</html>