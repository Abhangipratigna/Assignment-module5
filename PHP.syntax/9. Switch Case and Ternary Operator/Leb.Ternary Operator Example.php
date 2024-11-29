<?php

if(isset($_POST["submit"]))

{
$age=$_POST["age"];

$age = 20;
$message = ($age > 18) ? "You are eligible!" : "You are not eligible.";

echo $message;

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
      <input type="text" name="age" placeholder="Enter your age" required/>
      <br><br>
      <input type="submit" name="submit" value="submit">
</form>
</center>
  
</body>
</html>


