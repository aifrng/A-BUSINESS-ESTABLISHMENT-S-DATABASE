<?php
require 'dbconfig.php';

/* =========================
   FETCH ALL PRODUCTS
========================= */
$stmtAll = $pdo->query("SELECT * FROM products");
$allProducts = $stmtAll->fetchAll(PDO::FETCH_ASSOC);

/* =========================
   FETCH SINGLE PRODUCT (SAFE)
========================= */
$stmtOne = $pdo->query("SELECT * FROM products WHERE product_id = 1");
$singleProduct = $stmtOne->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Data</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #ffe5ec, #fff1e6);
        }

        .container {
            width: 70%;
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

        .section-title {
            text-align: center;
            margin-top: 25px;
            color: #ff7f50;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-bottom: 20px;
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
            padding: 10px;
            margin-top: 15px;
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

    <h2>🍰 Product Data View</h2>

    <!-- FETCH SINGLE -->
    <div class="section-title">📌 Single Product (FETCH)</div>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>

        <?php if ($singleProduct): ?>
        <tr>
            <td><?= $singleProduct['product_id'] ?></td>
            <td><?= $singleProduct['name'] ?></td>
            <td><?= $singleProduct['price'] ?></td>
            <td><?= $singleProduct['stock'] ?></td>
        </tr>
        <?php else: ?>
        <tr>
            <td colspan="4">❌ No product found with ID 1</td>
        </tr>
        <?php endif; ?>

    </table>

    <!-- FETCH ALL -->
    <div class="section-title">📦 All Products (FETCH ALL)</div>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>

        <?php foreach ($allProducts as $row): ?>
        <tr>
            <td><?= $row['product_id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['stock'] ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <a href="index.php" class="btn">🏠 Back to Home</a>

</div>

</body>
</html>