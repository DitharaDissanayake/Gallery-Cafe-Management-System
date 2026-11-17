<?php
session_start();
include 'config.php'; // Include your database connection settings

// Collect POST data
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute the query
$query = "SELECT id, role, password FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

// Check if user exists
if ($stmt->num_rows > 0) {
    $stmt->bind_result($user_id, $role, $hashed_password);
    $stmt->fetch();

    // Verify password
    if (password_verify($password, $hashed_password)) {
        // Store user ID and role in session
        $_SESSION['user_id'] = $user_id;
        $_SESSION['role'] = $role;

        // Redirect based on role
        if ($role === 'admin') {
            header('Location: admin.php');
        } elseif ($role === 'staff') {
            header('Location: staff.php');
        } else {
            header('Location: index.php');
        }
        exit();
    } else {
        // Incorrect password
        header('Location: login.php?error=1');
        exit();
    }
} else {
    // User does not exist
    header('Location: login.php?error=1');
    exit();
}

// Close statement and connection
$stmt->close();
$conn->close();
?>