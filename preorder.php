<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order - The Gallery Cafe</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('images/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        header {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2em;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        .preorder-form {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .preorder-form h2 {
            margin-top: 0;
            color: #333;
            font-size: 2em;
        }
        .preorder-form label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-size: 1.1em;
        }
        .preorder-form select, .preorder-form input[type="number"] {
            width: calc(100% - 22px);
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .preorder-form input[type="submit"], .preorder-form .add-item {
            background-color: #f39c12;
            border: none;
            color: white;
            padding: 12px 18px;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 6px;
            transition: background-color 0.3s;
        }
        .preorder-form input[type="submit"]:hover, .preorder-form .add-item:hover {
            background-color: #e67e22;
        }
        .preorder-form .remove-item {
            background-color: #c0392b;
            border: none;
            color: white;
            padding: 10px 15px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 6px;
            margin-top: 10px;
        }
        .preorder-form .remove-item:hover {
            background-color: #a93226;
        }
        .success-message, .error-message {
            background: #dff0d8;
            color: #3c763d;
            padding: 15px;
            border: 1px solid #d6e9c6;
            border-radius: 6px;
            margin-top: 20px;
            text-align: center;
        }
        .error-message {
            background: #f2dede;
            color: #a94442;
            border: 1px solid #ebccd1;
        }
        footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 15px;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <header>
        <h1>Order Now!</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                
        </nav>
    </header>

    <section class="preorder-form">
        <h2>Choose Your Meals</h2>
        <form id="preorder-form" method="POST" action="">
            <div id="items-container">
                <div class="item">
                    <label for="meal_id_1">Select Meal:</label>
                    <select name="meal_id[]" required>
                        <?php
                        $sql = "SELECT * FROM meals";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $formatted_price = number_format($row['price'], 2);
                                echo "<option value='" . $row['id'] . "'>" . $row['name'] . " - LKR " . $formatted_price . "</option>";
                            }
                        }
                        ?>
                    </select>

                    <label for="quantity_1">Quantity:</label>
                    <input type="number" name="quantity[]" min="1" required>
                </div>
            </div>
            <button type="button" class="add-item">Add Another Item</button>
            <input type="submit" value="Pre-order">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_id = 1; // Placeholder for logged-in user ID
            $meal_ids = $_POST['meal_id'];
            $quantities = $_POST['quantity'];

            // Generate a unique order ID
            $order_id = uniqid(); // Or use another method to generate a unique ID

            $success = true;
            $conn->begin_transaction();

            try {
                foreach ($meal_ids as $index => $meal_id) {
                    $quantity = $quantities[$index];
                    $sql = "INSERT INTO pre_orders (order_id, user_id, meal_id, quantity, order_date, status) VALUES ('$order_id', '$user_id', '$meal_id', '$quantity', NOW(), 'pending')";
                    if (!$conn->query($sql)) {
                        throw new Exception($conn->error);
                    }
                }

                $conn->commit();
                echo "<p class='success-message'>Pre-order successful! <a href='invoice.php?order_id=$order_id'>View Invoice</a></p>";
            } catch (Exception $e) {
                $conn->rollback();
                echo "<p class='error-message'>Error: " . $e->getMessage() . "</p>";
            }
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 The Gallery Cafe. All Rights Reserved.</p>
    </footer>

    <script>
        document.querySelector('.add-item').addEventListener('click', function() {
            const container = document.getElementById('items-container');
            const index = container.children.length + 1;

            const itemHTML = 
                <div class="item">
                    <label for="meal_id_${index}">Select Meal:</label>
                    <select name="meal_id[]" required>
                        <?php
                        $sql = "SELECT * FROM meals";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $formatted_price = number_format($row['price'], 2);
                                echo "<option value='" . $row['id'] . "'>" . $row['name'] . " - LKR " . $formatted_price . "</option>";
                            }
                        }
                        ?>
                    </select>

                    <label for="quantity_${index}">Quantity:</label>
                    <input type="number" name="quantity[]" min="1" required>
                    <button type="button" class="remove-item">Remove Item</button>
                </div>
            ;

            container.insertAdjacentHTML('beforeend', itemHTML);
        });

        document.getElementById('items-container').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-item')) {
                e.target.parentElement.remove();
            }
        });
    </script>
</body>
</html>