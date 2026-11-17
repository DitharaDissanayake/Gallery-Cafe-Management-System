<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - The Gallery Cafe</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Our Menu</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
              
            </ul>
        </nav>
    </header>

    <section class="menu">
        <h2>Search by Cuisine</h2>
        <form method="GET" action="menu.php">
            <select name="cuisine_type">
                <option value="">All Cuisines</option>
                <option value="Sri Lankan">Sri Lankan</option>
                <option value="Chinese">Chinese</option>
                <option value="Italian">Italian</option>
                <!-- Add more options as needed -->
            </select>
            <input type="submit" value="Filter">
        </form>

        <div class="meal-list">
            <?php
            $cuisine_type = isset($_GET['cuisine_type']) ? $_GET['cuisine_type'] : '';

            // SQL query to fetch meals based on cuisine type
            $sql = $cuisine_type ? 
                "SELECT * FROM meals WHERE cuisine_type = '$cuisine_type'" : 
                "SELECT * FROM meals";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Fetch and display meals
                while($row = $result->fetch_assoc()) {
                    echo "<div class='meal-item'>";
                    echo "<img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'>";
                    echo "<h3>" . $row['name'] . "</h3>";
                    echo "<p>" . $row['description'] . "</p>";
                    echo "<p class='price'>LKR " . $row['price'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No meals found.</p>";
            }
            ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 The Gallery Cafe.All Rights Reserved.</p>
    </footer>
</body>
</html>