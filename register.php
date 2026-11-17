<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - The Gallery Cafe</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container */
        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Form Styles */
        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
        }

        .form-container input[type="submit"] {
            background: #5cb85c;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s ease;
            width: 100%;
        }

        .form-container input[type="submit"]:hover {
            background: #4cae4c;
        }

        /* Success and Error Message Styles */
        .success-message {
            color: #28a745;
            margin-top: 15px;
            font-weight: bold;
            text-align: center;
        }

        .error-message {
            color: #dc3545;
            margin-top: 15px;
            font-weight: bold;
            text-align: center;
        }

        /* Link Styles */
        .form-container a {
            color: #007bff;
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
	 
    <div class="form-container">
        <h2>Create an Account</h2>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <label for="role">Role:</label>
            <select name="role" id="role" required>
                <option value="customer">Customer</option>
                <option value="staff">Operational Staff</option>
                <option value="admin">Admin</option>
            </select>

            <input type="submit" value="Register">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $role = $_POST['role'];

            $sql = "INSERT INTO users (username, password, role, email) VALUES ('$username', '$password', '$role', '$email')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='success-message'>Registration successful! <a href='login.php'>Login</a></p>";
            } else {
                echo "<p class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>