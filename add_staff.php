<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $staff_name = $_POST['staff_name'];
    $staff_role = $_POST['staff_role'];
    $staff_email = $_POST['staff_email'];

    $query = "INSERT INTO staff (name, role, email) VALUES ('$staff_name', '$staff_role', '$staff_email')";
    mysqli_query($conn, $query);

    echo "Staff member added successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff Members - The Gallery Cafe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
  
        <nav>
            <ul><br>
                <li><a href="admin.php">Admin Dashboard</a></li>
                
            </ul>
        </nav><br>
    </header><br><br>
    <div class="container">
        <h1>Add Staff Members</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="staff_name">Name:</label>
                <input type="text" class="form-control" id="staff_name" name="staff_name" required>
            </div>
            <div class="form-group">
                <label for="staff_role">Role:</label>
                <input type="text" class="form-control" id="staff_role" name="staff_role" required>
            </div>
            <div class="form-group">
                <label for="staff_email">Email:</label>
                <input type="email" class="form-control" id="staff_email" name="staff_email" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Add Staff</button>
        </form>
    </div>
</body>
</html>
