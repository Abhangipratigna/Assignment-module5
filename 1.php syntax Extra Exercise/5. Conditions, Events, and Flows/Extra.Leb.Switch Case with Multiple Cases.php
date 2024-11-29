<?php
    if(isset($_POST["submit"]))

    {
        $grade=$_POST["grade"];
            switch($grade) 
            {
            
             case "A":
               echo "<h4 style='color:green; text-align:center'>Consider seeking help</h4>";
                 break;
             case "B":
               echo "<h4 style='color:green; text-align:center'>job! But the room for improvement</h4>";
                break;
            
             case "C":
                echo "<h4 style='color:green; text-align:center'>Good</h4>";
                 break;
            
             case "D":
                 echo "<h4 style='color:green; text-align:center'>Needs Improvement Consider seeking help</h4>";
                  break;
            
             case "F":
                  echo "<h4 style='color:green; text-align:center'>Fail Don't give up! Try again</h4>";
                  break;
            
             default:
                  echo "<h4 style='color:green; text-align:center'>Invalid Grade Please enter a valid grade</h4>";
                  break;
                                

             }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Evaluation</title>
</head>
<body>
<center>
    <form method="POST">
        <label for="grade">Enter Grade : </label>
        <input type="text" id="grade" name="grade" maxlength="1" required>
        <input type="submit" value="Submit">
    </form>
</center>

</body>
</html>






