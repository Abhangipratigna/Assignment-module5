<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $price = $_POST['price'];

        $discount = ($price > 500) ? 0.10 * $price : 0;

        if ($discount > 0) {
            echo "<p>You received a 10% discount of $" . number_format($discount, 2) . ".</p>";
            echo "<p>Final price after discount: $" . number_format($price - $discount, 2) . "</p>";
        } else {
            echo "<p>No discount available. The price remains: $" . number_format($price, 2) . "</p>";
        }
    }
    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculator</title>
</head>
<body>
    <h2>Discount Calculator</h2>
    <form method="POST">
        <label for="price">Enter price of the product:</label>
        <input type="number" name="price" id="price" required>
        <input type="submit" value="Calculate Discount">
    </form>

</body>
</html>
