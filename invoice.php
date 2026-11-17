<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - The Gallery Cafe</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* New Styles */
         body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: url('Images/back6.png.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        header {
            background: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 20px 0 0;
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
            font-size: 1em;
        }
        nav ul li a:hover {
            color: #f39c12;
        }
        .invoice-container {
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .invoice-header {
            border-bottom: 2px solid #f39c12;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .invoice-header h2 {
            margin: 0;
            color: #333;
        }
        .invoice-header p {
            margin: 5px 0;
            color: #666;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .invoice-table th, .invoice-table td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        .invoice-table th {
            background: #f2f2f2;
            color: #333;
        }
        .invoice-table td {
            color: #666;
        }
        .invoice-table tfoot tr td {
            font-weight: bold;
            color: #333;
        }
        .invoice-footer {
            text-align: right;
            padding-top: 20px;
            border-top: 2px solid #f39c12;
        }
        .invoice-footer p {
            margin: 0;
            color: #333;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>The Gallery Cafe Restaurant</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                
                
                
            </ul>
        </nav>
    </header>

    <div class="invoice-container">
        <div class="invoice-header">
            <h2>Your Invoice</h2>
            <p>Order ID: <?php echo htmlspecialchars($_GET['order_id']); ?></p>
            <p>Date: <?php echo date('Y-m-d'); ?></p>
        </div>

        <?php
        if (isset($_GET['order_id'])) {
            $order_id = $conn->real_escape_string($_GET['order_id']);

            $sql = "SELECT meals.name, meals.price, pre_orders.quantity, (meals.price * pre_orders.quantity) as total 
                    FROM pre_orders 
                    JOIN meals ON pre_orders.meal_id = meals.id 
                    WHERE pre_orders.order_id = '$order_id'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='invoice-table'>
                        <thead>
                            <tr>
                                <th>Meal</th>
                                <th>Price (LKR)</th>
                                <th>Quantity</th>
                                <th>Total (LKR)</th>
                            </tr>
                        </thead>
                        <tbody>";

                $grand_total = 0;

                while ($row = $result->fetch_assoc()) {
                    $total = number_format($row['total'], 2);
                    $grand_total += $row['total'];
                    echo "<tr>
                            <td>" . htmlspecialchars($row['name']) . "</td>
                            <td>" . number_format($row['price'], 2) . "</td>
                            <td>" . $row['quantity'] . "</td>
                            <td>" . $total . "</td>
                        </tr>";
                }

                echo "  </tbody>
                        <tfoot>
                            <tr>
                                <td colspan='3'>Grand Total:</td>
                                <td>" . number_format($grand_total, 2) . "</td>
                            </tr>
                        </tfoot>
                    </table>";
            } else {
                echo "<p>No orders found for this invoice.</p>";
            }
        } else {
            echo "<p>Invalid invoice ID.</p>";
        }
        ?>

        <div class="invoice-footer">
            <p>Thank you for dining with us! Come again!</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 The Gallery Cafe.All Rights Reserved.</p>
    </footer>
</body>
</html>