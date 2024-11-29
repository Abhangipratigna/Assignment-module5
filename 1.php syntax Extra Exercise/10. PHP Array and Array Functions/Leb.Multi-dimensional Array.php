<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 7px;
            text-align: center;
        }
        th {
            background-color: white;
        }
    </style>
</head>
<body>

<h2>Product Information</h2>

<?php

$products = [
    ["name" => "Product A", "price" => 19.99, "stock" => 150],
    ["name" => "Product B", "price" => 29.99, "stock" => 120],
    ["name" => "Product C", "price" => 39.99, "stock" => 90],
    ["name" => "Product D", "price" => 49.99, "stock" => 200],
];

echo "<table>";
echo "<tr><th>Name</th><th>Price</th><th>Stock</th></tr>";

foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product["name"] . "</td>";
    echo "<td>$" . number_format($product["price"], 2) . "</td>";
    echo "<td>" . $product["stock"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
