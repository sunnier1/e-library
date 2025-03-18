<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'Journals About Us</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .info-member {
        width: 220px;
        float:left;
    }
    .info-member img {
        width: 65%;
        height: 40%;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
    }
    .member-details {
        color: #333;
    }

    footer {
        background-color: #f2f2f2;
        text-align: center;
        padding: 20px 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 20px;
    }

    @media (max-width: 800px) {
        .info-member {
            width: 100%;
        }
    }
        </style>
</head>
<body>
<?php include 'top-bar.php'; ?>

    <div class="menu-page">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php" >About Us</a></li>
            <li><a href="bookpage.php">Books</a></li>
            <li><a href="contactus.php" style="color:#ED553B">Contact Us</a></li>
        </ul>    
    </div>
    

    <div style="background-color:#393280; width: 100%; height: 200px; color: #FFFFFF; padding: 20px 0;margin-top:30px; text-align: center;">
        <h3 style="font-size: 36px;">Contact Us</h3>
        <p>Feel free to contact us any time. We will get back to you as soon as we can.</p>
    </div>

    <div style="background-color:#FFFFFF; width: 100%; right:0; margin-right:0; padding-bottom: 20px;">
        <h3 style="font-size: 36px; color: #000000; text-align: center; padding-top: 30px;">Send Us Message</h3>
        <form method="post" style="text-align: center; margin-top: 20px;">
            <div style="display: flex; justify-content: center; margin-bottom: 10px;">
                <div style="margin-right: 10px;">
                    <label for="name" style="font-size: 18px; color:#000000;">Name</label><br>
                    <input type="text" id="name" name="name" style="padding: 10px; width: 300px; border-radius: 5px; border: 1px solid #393280;"><br>
                </div>
                <div>
                    <label for="email" style="font-size: 18px; color: #000000;">Email</label><br>
                    <input type="email" id="email" name="email" style="padding: 10px; width: 300px; border-radius: 5px; border: 1px solid #393280;"><br>
                </div>
            </div>
            <div style="display: flex; justify-content: center; margin-bottom: 10px;">
                <div style="margin-right: 10px;">
                    <label for="phone" style="font-size: 18px; color: #000000;">Phone Number</label><br>
                    <input type="tel" id="phone" name="phone" style="padding: 10px; width: 300px; border-radius: 5px; border: 1px solid #393280;"><br>
                </div>
                <div>
                    <label for="city" style="font-size: 18px; color: #000000;">City</label><br>
                    <input type="text" id="city" name="city" style="padding: 10px; width: 300px; border-radius: 5px; border: 1px solid #393280;"><br>
                </div>
            </div>
            <div style="margin-bottom: 10px;">
                <label for="description" style="font-size: 18px; color: #000000;">Description</label><br>
                <textarea id="description" name="description" rows="4" cols="50" style="padding: 10px; width: 600px; border-radius: 5px; border: 1px solid #393280;"></textarea><br>
            </div>
            <div style="margin-top: 20px;">
                <button type="submit" style="background-color: #393280; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 18px; cursor: pointer;">Send Message</button>
            </div>
        </form>
    </div>

        <div style="background-color:#f2f2f2; text-align: center; padding: 20px 0;">
            <h2 style="color: #ED553B; font-weight: 700; font-size: 30px;">Our Information</h2>
        </div>
        
        <footer>
            <div class="info-member">
                <img src="../img/member1.jpg" alt="Member 1">
                <div class="member-details">
                    <h3>Adenovitricia Nanda Putri</h3>
                    <p><ion-icon name="logo-instagram"></ion-icon> @nama_member</p>
                    <p><ion-icon name="mail-outline"></ion-icon> member1@example.com</p>
                </div>
            </div>
            <div class="info-member">
                <img src="../img/member2.jpg" alt="Member 2">
                <div class="member-details">
                    <h3>Lispita Sari</h3>
                    <p><ion-icon name="logo-instagram"></ion-icon> @lispita</p>
                    <p><ion-icon name="mail-outline"></ion-icon> lispita.sari@president.ac.id</p>
                </div>
            </div>
            <div class="info-member">
                <img src="../img/member3.png" alt="Member 3">
                <div class="member-details">
                    <h3>Ahmad Rafli Ramadhan</h3>
                    <p><ion-icon name="logo-instagram"></ion-icon> @nama_member</p>
                    <p><ion-icon name="mail-outline"></ion-icon> member3@example.com</p>
                </div>
            </div>
            <div class="info-member">
                <img src="../img/member4.jpg" alt="Member 4">
                <div class="member-details">
                    <h3>Lalu Fariz</h3>
                    <p><ion-icon name="logo-instagram"></ion-icon> @nama_member</p>
                    <p><ion-icon name="mail-outline"></ion-icon> member4@example.com</p>
                </div>
            </div>
            <div class="info-member">
                <img src="../img/member5.png" alt="Member 5">
                <div class="member-details">
                    <h3>Rafli Bagus</h3>
                    <p><ion-icon name="logo-instagram"></ion-icon> @nama_member</p>
                    <p><ion-icon name="mail-outline"></ion-icon> member5@example.com</p>
                </div>
            </div>
        </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    </body>
    </html>

    <?php
include "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['name']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
    $phone = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['phone']));
    $city = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['city']));
    $description = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['description']));

    $sql = "INSERT INTO contacts (name, email, phone, city, description) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $city, $description);


if (empty($name) || empty($email) || empty($phone) || empty($city) || empty($description)) {
    echo "Please fill all required fields.";
} else {
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}


    $stmt->close();
}

$conn->close();
?>
