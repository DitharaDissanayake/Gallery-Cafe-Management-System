<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - The Gallery Cafe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background: url('Images/back6.png.jpg') no-repeat center center;
            background-size: cover;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }
        header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5em;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
        }
        nav ul li {
            display: inline-block;
            margin: 0 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2em;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 15px;
        }
        .about-section {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 50px;
        }
        .about-section h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .about-section p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .contact-details h4 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #4b2e83;
        }
        .team-section {
            padding: 50px 0;
        }
        .team-section h2 {
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 2.5em;
            margin-bottom: 40px;
        }
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 210px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .team-member h5 {
            font-size: 1.2em;
            font-weight: bold;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Our History</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="about-section">
            <h1>About Us</h1>
            <p>Welcome to The Gallery Cafe Restaurant, where we combine art with delicious food. Since 2010, we've been serving dishes inspired by flavors from around the world, all in a setting filled with creativity and charm.</p>
            <p>Our story began with a vision to create not just a dining experience, but a space where culture, community, and cuisine come together. Over the years, The Gallery Cafe has become a beloved landmark in Colombo, known for its exceptional service, innovative menu, and the vibrant art exhibitions that adorn our walls.</p>
            <p>We invite you to join us and be part of our story as we continue to explore the art of cooking.</p>
        </div>

        <div class="team-section">
            <h2>Meet Our Team</h2>
            <div class="row">
                <div class="col-md-4 team-member">
                    <img src="Images/person.png" alt="Team Member 1">
                    <h5>John Doe</h5>
                    <p>Executive Chef</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="Images/person1.png" alt="Team Member 2">
                    <h5>Jane Smith</h5>
                    <p>General Manager</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="Images/person2.png" alt="Team Member 3">
                    <h5>Mike Johnson</h5>
                    <p>Head of Operations</p>
                </div>
            </div>
        </div>

        <div class="contact-details">
            <h4>Contact Us</h4>
            <p><strong>Address:</strong> 123 Art Street, Colombo 04, Sri Lanka</p>
            <p><strong>Telephone:</strong> +94 11 2345699</p>
            <p><strong>Email:</strong> contactus@gallerycafe.com</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 The Gallery Cafe. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>