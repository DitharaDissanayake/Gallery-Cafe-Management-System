<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations - The Gallery Cafe</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('images/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        header {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
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
        .reservation-form {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            margin: 20px auto;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .reservation-form h2 {
            margin-top: 0;
            color: #333;
        }
        .reservation-form label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }
        .reservation-form select, .reservation-form input[type="datetime-local"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        .reservation-form input[type="submit"] {
            background-color: #f39c12;
            border: none;
            color: white;
            padding: 15px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
        }
        .reservation-form input[type="submit"]:hover {
            background-color: #e67e22;
        }
        footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .success-message, .error-message {
            background: #dff0d8;
            color: #3c763d;
            padding: 15px;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
            margin-top: 20px;
            text-align: center;
        }
        .error-message {
            background: #f2dede;
            color: #a94442;
            border: 1px solid #ebccd1;
        }
        .no-reservations {
            color: #a94442;
            font-size: 18px;
            text-align: center;
            margin-top: 20px;
        }
        .reservation-list {
            margin-top: 20px;
        }
        .reservation-list table {
            width: 100%;
            border-collapse: collapse;
        }
        .reservation-list th, .reservation-list td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .reservation-list th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <header>
        <h1>Table Reservations</h1>
        <nav><br>	
            <ul>
                <li><a href="index.php">Home</a></li>
                
            </ul>
        </nav>
    </header><br><br><br>

    <section class="reservation-form">
        <h2>Check Table Availability</h2>
        <form method="POST" action="">
            <label for="check_capacity">Table Capacity:</label>
            <select name="check_capacity" required>
                <option value="2">2 People</option>
                <option value="4">4 People</option>
                <option value="6">6 People</option>
                <!-- Add more options as needed -->
            </select>

            <label for="check_date">Check Date & Time:</label>
            <input type="datetime-local" name="check_date" required>

            <input type="submit" name="check_availability" value="Check Availability">
        </form>

        <?php
        if (isset($_POST['check_availability'])) {
            $check_capacity = $_POST['check_capacity'];
            $check_date = $_POST['check_date'];

            // Check availability
            $sql = "SELECT * FROM reservations 
                    WHERE table_capacity = ? AND reservation_date = ? AND status = 'confirmed'";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('is', $check_capacity, $check_date);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 0) {
                echo "<h3>Tables are available!</h3>";
                echo "<form method='POST' action=''>";
                echo "<input type='hidden' name='table_capacity' value='" . htmlspecialchars($check_capacity) . "'>";
                echo "<input type='hidden' name='reservation_date' value='" . htmlspecialchars($check_date) . "'>";
                echo "<input type='submit' name='make_reservation' value='Reserve Table'>";
                echo "</form>";
            } else {
                echo "<p class='no-reservations'>No available tables at this time.</p>";
            }
        }

        if (isset($_POST['make_reservation'])) {
            $table_capacity = $_POST['table_capacity'];
            $reservation_date = $_POST['reservation_date'];
            $user_id = 1; // Placeholder for logged-in user ID

            // Insert reservation
            $sql = "INSERT INTO reservations (user_id, table_capacity, reservation_date, status) VALUES (?, ?, ?, 'pending')";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('iis', $user_id, $table_capacity, $reservation_date);

            if ($stmt->execute()) {
                echo "<p class='success-message'>Reservation successful! We will confirm your reservation shortly.</p>";
            } else {
                echo "<p class='error-message'>Error: " . $stmt->error . "</p>";
            }
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 The Gallery Cafe. All Rights Reserved.</p>
    </footer>
</body>
</html>