<?php
require 'dbconfig.php';

/* =========================
   FETCH CUSTOMER (SAFE)
========================= */
$sqlCustomer = "SELECT customer_id, name, email, phone 
                FROM customers 
                WHERE customer_id = 1";

$stmtCustomer = $pdo->query($sqlCustomer);
$customer = $stmtCustomer->fetch(PDO::FETCH_ASSOC);

/* =========================
   FETCH PRODUCT (SAFE)
========================= */
$sqlProduct = "SELECT product_id, name, price, stock 
               FROM products 
               WHERE product_id = 1";

$stmtProduct = $pdo->query($sqlProduct);
$product = $stmtProduct->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #ffe5ec, #fff1e6);
        }

        .container {
            width: 60%;
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
            margin-bottom: 25px;
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

        .section-title {
            margin-top: 20px;
            color: #ff7f50;
            font-weight: bold;
            text-align: center;
        }

        .btn {
            display: block;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
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

    <h2>📊 Data View (Customer + Product)</h2>

    <!-- CUSTOMER TABLE -->
    <div class="section-title">👤 Customer Info</div>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <?php if ($customer): ?>
        <tr>
            <td><?= $customer['customer_id'] ?></td>
            <td><?= $customer['name'] ?></td>
            <td><?= $customer['email'] ?></td>
            <td><?= $customer['phone'] ?></td>
        </tr>
        <?php else: ?>
        <tr>
            <td colspan="4">❌ No customer found</td>
        </tr>
        <?php endif; ?>

    </table>

    <!-- PRODUCT TABLE -->
    <div class="section-title">🍰 Product Info</div>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>

        <?php if ($product): ?>
        <tr>
            <td><?= $product['product_id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['stock'] ?></td>
        </tr>
        <?php else: ?>
        <tr>
            <td colspan="4">❌ No product found</td>
        </tr>
        <?php endif; ?>

    </table>

    <a href="index.php" class="btn">🏠 Back to Home</a>

</div>

</body>
</html>