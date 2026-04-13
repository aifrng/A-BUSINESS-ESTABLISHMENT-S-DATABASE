<?php
require 'dbconfig.php';

// JOIN 3 TABLES
$sql = "SELECT 
            orders.order_id,
            customers.name AS customer_name,
            payments.amount,
            payments.payment_method,
            orders.status
        FROM orders
        INNER JOIN customers ON orders.customer_id = customers.customer_id
        INNER JOIN payments ON orders.order_id = payments.order_id";

$stmt = $pdo->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Joined Data</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #ffe5ec, #fff1e6);
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background: #fffaf5;
            padding: 25px;
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

        .btn {
            display: block;
            text-align: center;
            margin-top: 15px;
            padding: 10px;
            background: #ff7f50;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .btn:hover {
            background: #d35400;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>📊 Joined Data (Orders + Customers + Payments)</h2>

    <table border="1">
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Amount</th>
            <th>Payment Method</th>
            <th>Status</th>
        </tr>

        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row['order_id'] ?></td>
            <td><?= $row['customer_name'] ?></td>
            <td><?= $row['amount'] ?></td>
            <td><?= $row['payment_method'] ?></td>
            <td><?= $row['status'] ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <a href="index.php" class="btn">🏠 Back to Home</a>

</div>

</body>
</html>