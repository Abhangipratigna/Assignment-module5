<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Calculator</title>
</head>
<body>
    <center>
    <h2> Calculator</h2>
    <form method="POST">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" step="any" required><br><br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" step="any"><br><br>


        <label for="operator">Operator:</label>
        <select id="operator" name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="power">^ (Exponentiation)</option>
            <option value="modulus">% (Modulus)</option>
            <option value="sqrt">√ (Square Root)</option>
        </select><br><br>


        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $num1 = $_POST['num1'];
        $operator = $_POST['operator'];
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;

        $result = null;
        $error_message = '';

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;

            case 'subtract':
                $result = $num1 - $num2;
                break;

            case 'multiply':
                $result = $num1 * $num2;
                break;

            case 'divide':
                if ($num2 == 0) {
                    $error_message = "Error: Cannot divide by zero.";
                } else {
                    $result = $num1 / $num2;
                }
                break;

            case 'power':
                $result = pow($num1, $num2);
                break;

            case 'modulus':
                if ($num2 == 0) {
                    $error_message = "Error: Modulus by zero is not allowed.";
                } else {
                    $result = $num1 % $num2;
                }
                break;

            case 'sqrt':
                if ($num1 < 0) {
                    $error_message = "Error: Cannot compute the square root of a negative number.";
                } else {
                    $result = sqrt($num1);
                }
                break;

            default:
                $error_message = "Error: Invalid operator.";
        }

        if ($error_message) {
            echo "<p style='color:red;'>$error_message</p>";
        } else {
            echo "<h3>Result: $result</h3>";
        }
    }

    ?>
    </center>
</body>
</html>
