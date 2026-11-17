<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - The Gallery Cafe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background: #4CAF50;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        .dashboard {
            padding: 2rem;
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .dashboard h2 {
            color: #4CAF50;
            margin-bottom: 1rem;
        }
        .card {
            background: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-body {
            padding: 15px;
            text-align: center;
        }
        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .card-text {
            font-size: 1.1rem;
            color: #555;
        }
        .btn-primary {
            background-color: #4CAF50;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #45a049;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="dashboard">
        <div class="card">
            <img src="Images/order2.png" alt="Customer Orders">
            <div class="card-body">
                <h2 class="card-title">Customer Orders</h2>
                <p class="card-text">View and manage all customer orders.</p>
                <a href="view_orders.php" class="btn btn-primary">View Orders</a>
            </div>
        </div>

        <div class="card">
            <img src="Images/reser1.png" alt="Reservations">
            <div class="card-body">
                <h2 class="card-title">Reservations</h2>
                <p class="card-text">View and manage table reservations.</p>
                <a href="view_reservations.php" class="btn btn-primary">View Reservations</a>
            </div>
        </div>

        <div class="card">
            <img src="Images/add.png" alt="Add Staff">
            <div class="card-body">
                <h2 class="card-title">Add Staff Members</h2>
                <p class="card-text">Add and manage staff members.</p>
                <a href="add_staff.php" class="btn btn-primary">Add Staff</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 The Gallery Cafe. All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>