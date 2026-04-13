<?php
require 'dbconfig.php';

$stmt = $pdo->query("SELECT * FROM products");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pastry Products</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #ffe5ec, #fff1e6);
        }

        .container {
            width: 70%;
            margin: 60px auto;
            background: #fffaf5;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-top: 6px solid #ff7f50;
        }

        h2 {
            text-align: center;
            color: #d35400;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            background: #ff7f50;
            color: white;
            padding: 10px;
        }

        td {
            text-align: center;
            padding: 10px;
            background: white;
        }

        tr:nth-child(even) td {
            background: #fff1e6;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #d35400;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>🍰 Pastry Products List</h2>

    <table>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>

        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row['product_id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['stock'] ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <a href="index.php">← Back to Home</a>
</div>

</body>
</html>