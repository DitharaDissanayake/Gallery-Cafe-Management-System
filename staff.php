<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'staff') {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard - The Gallery Cafe</title>
    <link rel="stylesheet" href="css/styles.css">
	<style>/* Reset some default styles */
body, h1, h2, p, ul {
    margin: 0;
    padding: 0;
}

/* Body and background */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}

/* Header styling */
header {
    background: #3498db; /* Calming blue */
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

/* Dashboard section styling */
.dashboard {
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
    background: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.dashboard h2 {
    color: #3498db; /* Matching header color */
    margin-bottom: 1rem;
}

/* Footer styling */
footer {
    background: #2c3e50; /* Darker gray for contrast */
    color: #fff;
    text-align: center;
    padding: 1rem;
    position: fixed;
    width: 100%;
    bottom: 0;
}

/* Responsive design */
@media (max-width: 768px) {
    nav ul li {
        display: block;
        margin: 10px 0;
    }
}</style>
</head>
<body>
    <header>
        <h1>Staff Dashboard</h1>
        <nav>
            <ul>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="dashboard">
        <h2>Manage Orders and Reservations</h2>
        <!-- Staff controls here -->
    </section>

    <footer>
        <p>&copy; 2024 The Gallery Cafe. All Rights Reserved.</p>
    </footer>
</body>
</html>