<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "your_database_name"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h2>INNER JOIN - Users who placed orders:</h2>";
$sql = "SELECT users.username, orders.order_id, orders.order_date, orders.amount 
        FROM users
        INNER JOIN orders ON users.user_id = orders.user_id
        WHERE orders.amount > 50"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Username: " . $row['username'] . " - Order ID: " . $row['order_id'] . " - Order Date: " . $row['order_date'] . " - Amount: $" . $row['amount'] . "<br>";
    }
} else {
    echo "0 results found for INNER JOIN.<br>";
}

echo "<h2>LEFT JOIN - All users with their orders (including users without orders):</h2>";
$sql = "SELECT users.username, orders.order_id, orders.order_date, orders.amount 
        FROM users
        LEFT JOIN orders ON users.user_id = orders.user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Username: " . $row['username'] . " - Order ID: " . ($row['order_id'] ? $row['order_id'] : 'No Order') . " - Order Date: " . ($row['order_date'] ? $row['order_date'] : 'N/A') . " - Amount: $" . ($row['amount'] ? $row['amount'] : '0') . "<br>";
    }
} else {
    echo "0 results found for LEFT JOIN.<br>";
}

echo "<h2>RIGHT JOIN - All orders with their users (including orders without users):</h2>";
$sql = "SELECT users.username, orders.order_id, orders.order_date, orders.amount 
        FROM users
        RIGHT JOIN orders ON users.user_id = orders.user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Username: " . ($row['username'] ? $row['username'] : 'No User') . " - Order ID: " . $row['order_id'] . " - Order Date: " . $row['order_date'] . " - Amount: $" . $row['amount'] . "<br>";
    }
} else {
    echo "0 results found for RIGHT JOIN.<br>";
}

$conn->close();
?>
