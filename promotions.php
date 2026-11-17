<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Events & Promotions - The Gallery Cafe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            font-size: 2.5em;
            margin: 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }
        nav ul li {
            display: inline-block;
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        .promotions-section {
            padding: 50px 0;
        }
        .promotion-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            text-align: center;
            padding: 30px;
        }
        .promotion-card img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .promotion-card h3 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #4b2e83;
        }
        .promotion-card p {
            font-size: 1.2em;
            margin-bottom: 15px;
        }
        .btn-promo {
            background-color: #4b2e83;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-promo:hover {
            background-color: #3a236a;
        }
    </style>
</head>
<body>

<header>
    <h1>Special Events & Promotions</h1>
    <nav><br>
        <ul>
            <li><a href="index.php">Home</a></li>
           
        </ul>
    </nav>
</header>

<div class="container promotions-section">
    <div class="row">
        <div class="col-md-4">
            <div class="promotion-card">
                <img src="Images/wine-tasting.png" alt="Wine Tasting Evening">
                <h3>Wine Tasting Evening</h3>
                <p>Experience fine wines paired with delicious appetizers. Date: 25th August 2024.</p>
                <a href="#" class="btn-promo">Learn More</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="promotion-card">
                <img src="Images/jazz-night.png" alt="Live Jazz Night">
                <h3>Live Jazz Night</h3>
                <p>Enjoy live jazz performances with a specially curated menu. Date: 30th August 2024.</p>
                <a href="#" class="btn-promo">Learn More</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="promotion-card">
                <img src="Images/happy-hour.png" alt="Happy Hour Special">
                <h3>Happy Hour Special</h3>
                <p>50% off on selected cocktails every Friday from 6 PM to 8 PM.</p>
                <a href="#" class="btn-promo">Learn More</a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="promotion-card">
                <img src="Images/art-exhibition.png" alt="Art Exhibition">
                <h3>Art Exhibition</h3>
                <p>Explore the latest art pieces from local artists. Date: 1st September 2024.</p>
                <a href="#" class="btn-promo">Learn More</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="promotion-card">
                <img src="Images/buy.png" alt="Don't Cook Tuesday">
                <h3>Don't Cook Tuesday</h3>
                <p>Buy 1 and get 1 free for dine-in, takeaway, and delivery.</p>
                <a href="#" class="btn-promo">Learn More</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>