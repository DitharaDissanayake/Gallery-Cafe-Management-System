<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - The Gallery Cafe</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Global Styles */
      body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: url"Images/back6.png.jpg" no-repeat center center fixed;
            background-size: cover;
    background: #f0f4f7;
    color: #333;
}

        /* Header Styles */
        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            letter-spacing: 1px;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 15px 0 0;
        }

        header nav ul li {
            display: inline;
            margin: 0 10px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2em;
        }

        header nav ul li a:hover {
            text-decoration: underline;
        }

        /* Login Section Styles */
        .login-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 120px);
            background-color: #e8f5e9;
        }

        .login-form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: left;
        }

        .login-form-container h2 {
            margin-top: 0;
            color: #388E3C;
            font-size: 1.8em;
            text-align: center;
        }

        .login-form-container label {
            display: block;
            margin: 20px 0 10px;
            font-weight: bold;
            color: #666;
        }

        .login-form-container input[type="text"],
        .login-form-container input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1em;
        }

        .login-form-container input[type="submit"] {
            background-color: #388E3C;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            width: 100%;
            transition: background 0.3s ease;
        }

        .login-form-container input[type="submit"]:hover {
            background-color: #2e7d32;
        }

        /* Error Message Styles */
        .error-message {
            color: #d32f2f;
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
        }

        /* Footer Styles */
        footer {
            background-color: #4CAF50;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to The Gallery Cafe Restaurant</h1>
        <nav>
            <ul>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <section class="login-section">
        <div class="login-form-container">
            <h2>Login</h2>
            <form method="POST" action="login_check.php">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>

                <input type="submit" value="Login">
            </form>

            <?php
            if (isset($_GET['error'])) {
                echo "<p class='error-message'>Invalid username or password. Please try again.</p>";
            }
            ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 The Gallery Cafe. All Rights Reserved.</p>
    </footer>
</body>
</html>