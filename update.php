<?php
require 'dbconfig.php';

$sql = "UPDATE products SET price = ?, stock = ? WHERE product_id = ?";
$stmt = $pdo->prepare($sql);

$stmt->execute([900, 15, 3]);

echo "✏️ Product updated successfully!";
?>

<div class="container">
    <h2>✏️ Update Product</h2>

    <form method="POST">
        <input type="number" name="id" placeholder="Product ID">
        <input type="number" name="price" placeholder="New Price">
        <input type="number" name="stock" placeholder="New Stock">
        <button type="submit">Update</button>
    </form>

    <a href="index.php">← Back to Home</a>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background: linear-gradient(135deg, #ffe5ec, #fff1e6);
    }

    .container {
        width: 45%;
        margin: 60px auto;
        background: #fffaf5;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-top: 6px solid #ff7f50;
    }

    h2 {
        text-align: center;
        color: #d35400;
        margin-bottom: 20px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ddd;
        border-radius: 10px;
        background: #ffffff;
    }

    button {
        width: 100%;
        padding: 12px;
        margin-top: 10px;
        border: none;
        border-radius: 10px;
        background: #ff7f50;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #d35400;
        transform: scale(1.02);
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
        padding: 8px;
        background: #fff;
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

    a:hover {
        color: #ff7f50;
    }
</style>