<?php 
if(isset($_POST["submit"]))
{

  $number=$_POST["number"];
  if($number%2==0)
  {
   echo "<h4 style='color:green; text-align:center'>The number is even</h4>";
  }
  else 
  {
    echo "<h4 style='color:red; text-align:center'>The number is odd</h4>";
  }

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
            <input type="text" name="number" placeholder="Enter Even number" required />
            <br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </center>
</body>

</html>