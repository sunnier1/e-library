<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusive page test</title>
    <link rel="stylesheet" href="../css/styletest.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>
<body>
<?php include 'top-bar.php' ?>
<body>    
 <div class="menu-page">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="bookpage.php">Books</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    
    </div>
        <h1 style="text-align:center; margin:100px 0;">Our Pricing</h1 style="text-align:center">

    <div class="cards0">
        <div class="card0 shadow">
            <ul class="ulik">
                <li class="pack">Free</li>
                <li id="basic" class="price bottom-bar">&dollar; 00.00</li>
                <li class="bottom-bar">Only access Free Books</li>
                <li class="bottom-bar">can add to favorite and wishlist</li>
                <li class="bottom-bar">can add or follow the author of the book</li>
                <li>
                    <button class="btn100" style="background:#fff; color:#d7d7d7; cursor:none;">Learn More</button>
                </li>
            </ul>
        </div>
        <div class="card0 active">
            <ul class="ulik">
                <li class="pack">Profesional / month</li>
                <li id="basic" class="price bottom-bar">&dollar; 29.99</li>
                <li class="bottom-bar">Can access Premium Books</li>
                <li class="bottom-bar">Can create or Upload Books</li>
                <li class="bottom-bar">Free Access To All Journal And Books</li>
                <li>
                    <button class="btn100" style="background: #fff;
    color: hsl(237, 63%, 64%);" onclick="window.location.href='payment.php'">Learn More</button>
                </li>
            </ul>
        </div>
        <div class="card0 shadow">
            <ul class="ulik">
                <li class="pack">Master / year</li>
                <li id="basic" class="price bottom-bar">&dollar; 89.99</li>
                <li class="bottom-bar">Can access Premium Books And Premium Journal</li>
                <li class="bottom-bar">Can create or Upload Books</li>
                <li class="bottom-bar">Free Access To All Journal And Books</li>
                <li>
                    <button class="btn100" onclick="window.location.href='payment.php'">Learn More</button>
                </li>
            </ul>
        </div>
    </div>

</body>
</html>