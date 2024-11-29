<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    
    // Check if operator is selected
    if ($operator) {
        $result = 0;

        // Perform calculation based on operator using if-else
        if ($operator == '+') {
            $result = $num1 + $num2;
        } elseif ($operator == '-') {
            $result = $num1 - $num2;
        } elseif ($operator == '*') {
            $result = $num1 * $num2;
        } elseif ($operator == '/') {
            // Handle division by zero
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "<p style='color:red;'>Error: Cannot divide by zero.</p>";
                exit();
            }
        }

        // Display result
        echo "<h3>Result: $num1 $operator $num2 = $result</h3>";
    } else {
        echo "<p style='color:red;'>Please select an operator.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <br><br>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <br><br>
        <select name="operator" required>
            <option value="">Select Operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br><br>
        <input type="submit" value="Calculate">
    </form>

</body>

</html>