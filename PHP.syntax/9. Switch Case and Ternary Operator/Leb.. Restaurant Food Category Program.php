<?php

if(isset($_POST["submit"]))
{
  $foodcategory=$_POST["foodcategory"];
   switch($foodcategory) 
{

    case "starters":
    echo "<h4 style='color:green; text-align:center'>starters is selected </h4>";
      break;
    
    case "maincoures":
    echo "<h3 style='text-align:center; color:hwb(0 5% 11%)'>maincoures is selected</h3>";
      break;

    case "dessert":
    echo "<h3 style='text-align:center; color:hwb(316 0% 0%)'>dessert is selected</h3>";
      break;

    default:
      echo "something went wrong";
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
      <select name="foodcategory">
        <option value="starters">starters</option>
        <option value="maincoures">maincoures</option>
        <option value="dessert">dessert</option>
      </select>
      <input type="submit" name="submit" value="submit">
    </form>
  </center>
</body>

</html>