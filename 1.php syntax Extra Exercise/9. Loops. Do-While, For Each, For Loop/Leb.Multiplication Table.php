<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 7px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Multiplication Table</h2>
    <table>
        <?php

        for ($i = 1; $i <= 10; $i++)

         {
            echo "<tr>";
            
            for ($j = 1; $j <= 10; $j++) {
                $product = $i * $j;
                
                echo "<td>$product</td>";
            }
            
            echo "</tr>";
        }

        ?>
    </table>
</body>
</html>
