<?php

if(isset($_POST["chk"]))
{   
   $day=$_POST["day"];
   
switch($day)
{
    case '1':
        echo" happy sunday";
        break;
    case '2':
        echo"monday";
      break;
    case '3':
        echo"tuesday";
         break;
    case '4':
        echo"wednesday";
         break;
    case '5':
        echo"thursday";
        break;
    case '6':
        echo"friday";
         break;
    case '7':
         echo"saturday";
          break;
    default:
         echo"No day";
          break;
   
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
            <input type="text" name="day" placeholder="Enter your day *" required />
            <br><br>
            <input type="submit" name="chk" value="Check">
        </form>
    </center>


</body>

</html>