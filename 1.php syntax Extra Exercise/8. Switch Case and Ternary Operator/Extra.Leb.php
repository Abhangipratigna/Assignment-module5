<?php

if(isset($_POST["chk"]))
{
    $month=$_POST["month"];

switch($month)
{
    case '1':
        echo"january";
        break;
    case '2':
        echo"february";
      break;
    case '3':
        echo"march";
         break;
    case '4':
        echo"April";
         break;
    case '5':
        echo"may";
        break;
    case '6':
        echo"jun";
         break;
    case '7':
         echo"july";
          break;
    case '8':
         echo"August";
          break;
    case '9':
         echo"September";
          break;
    case '10':
         echo"October";
           break;
    case '11':
        echo"November";
         break;
    case'12':
        echo"December";
         break;
    default:
       echo"No month";
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
			<input type="text" name="month" placeholder="Enter your month" required />
			<br><br>
			<input type="submit" name="chk" value="check">
		</form>
	</center>
</body>
</html>

