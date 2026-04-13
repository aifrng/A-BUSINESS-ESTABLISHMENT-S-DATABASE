<!DOCTYPE html>
<html>
<head>
    <title>Strawberry Cake Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fff1e6, #ffe5ec);
            color: #333;
        }

        /* HEADER */
        .header {
            text-align: center;
            padding: 60px 20px;
        }

        .header h1 {
            font-size: 40px;
            color: #d35400;
        }

        .header p {
            font-size: 16px;
            color: #555;
        }

        /* DASHBOARD GRID */
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            padding: 40px;
            max-width: 1000px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card a {
            text-decoration: none;
            color: #fff;
            background: #ff7f50;
            padding: 10px 15px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 10px;
        }

        .card a:hover {
            background: #e85d04;
        }
    
        /* FOOTER */
        .footer {
            text-align: center;
            padding: 20px;
            color: #777;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>🍰 Strawberry Cake Shop</h1>
    <p>Welcome to Strawberry Cake Shop, where every bite is a berry sweet moment of happiness. 🍓🎂</p>
</div>

<div class="container">

    <div class="card">
        <h3>📦 Products</h3>
        <a href="table_display.php">View</a>
    </div>

    <div class="card">
        <h3>➕ Insert</h3>
        <a href="insert.php">Add</a>
    </div>

    <div class="card">
        <h3>✏️ Update</h3>
        <a href="update.php">Edit</a>
    </div>

    <div class="card">
        <h3>🗑 Delete</h3>
        <a href="delete.php">Remove</a>
    </div>

    <div class="card">
        <h3>🔗 Join Data</h3>
        <a href="join.php">Open</a>
    </div>

    <div class="card">
        <h3>📊 Fetch Data</h3>
        <a href="fetch_all.php">View</a>
    </div>

</div>

<div class="footer">
    © 2026 Strawberry Cake Shop | PHP PDO Project
</div>

</body>
</html>