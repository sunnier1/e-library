<?php
include 'top-bar.php';
include 'connection.php';

$sql = "SELECT * FROM profile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $nickname = $row['nickname'];
    $email = $row['email'];
    $address = $row['address'];
    $state = $row['state'];
    $city = $row['city'];
    $photoPath = $row['photo_path'];
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .profile-info {
            margin-top: 20px;
            text-align: center;
        }

        .profile-info img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover; 
            margin-bottom: 20px;
        }

        .profile-info p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="menu-page">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="bookpage.php">Books</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    
    </div>  
    <div class="menu-in-profile">
        <ul>
            <li><a href="profile.php" style="color:#ED553B; font-weight: 600;"><ion-icon name="person-sharp" style="color:#df4024"></ion-icon>Account</a></li>
            <li><a href="edit_profile.php"><ion-icon name="pencil-sharp" ></ion-icon>Edit Profile</a></li>
        </ul>
    </div>
    <div class="profile-info">
        <?php if(isset($photoPath)): ?>
            <img src="<?php echo $photoPath; ?>" alt="Profile Picture">
        <?php endif; ?>
        <?php echo $username; ?></p>
        <?php echo $nickname; ?></p>
        <?php echo $email; ?></p>
        <?php echo $address; ?></p>
        <?php echo $state; ?></p>
        <?php echo $city; ?></p>
    </div>
</body>
</html>