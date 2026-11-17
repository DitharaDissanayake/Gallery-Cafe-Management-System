<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

include('config.php');

$query = "SELECT * FROM reservations";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations - The Gallery Cafe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
  <br>
        <nav>
            <ul>
                <li><a href="admin.php">Admin Dashboard</a></li>
                
            </ul>
        </nav><br>
    </header>
    <div class="container">
        <br><br><h1>Reservations</h1>
        <table class="table table-bordered"><br>
            <thead>
                <tr>
                    <th>Reservation ID</th>
                    <th>User ID</th>
                    <th>Table Capacity</th>
                    <th>Reservation Date</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['table_capacity']; ?></td>
                        <td><?php echo $row['reservation_date']; ?></td>
                      
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>