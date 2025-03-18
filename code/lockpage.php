<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lockpage        </title>
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>
<body>
<?php  include 'top-bar.php'; ?>
    <div class="menu-page">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="bookpage.php">Books</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    
    </div>

        <div class="subscribe-box">
            <div class="subscribe-icon">
                <img src="../img/padlock-3.png" alt="Lock Icon">
            </div>
            <p>Subscribe to unlock more features</p>
            <button class="subscribe-button" onclick="window.location.href='upgrade.php'">Subscribe</button>
        </div>
    </div>
</body>
</html>