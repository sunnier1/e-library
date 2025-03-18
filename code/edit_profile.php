<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "connection.php";

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $bio = mysqli_real_escape_string($conn, $_POST['bio']);

    $targetDir = "./profile/";
    $photoName = basename($_FILES["photo"]["name"]);
    $photoPath = $targetDir . $photoName;

    $update_query = "UPDATE user 
                 SET 
                     nickname = '$nickname',
                     email = '$email',
                     address = '$address',
                     state = '$state',
                     city = '$city',
                     photo_path = '$photoPath'
                 WHERE 
                     username = '$username'";

    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($_FILES["photo"]["tmp_name"], $photoPath);
        header("location:profile.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Business</title>
</head>
    <body>
<?php include 'top-bar.php'; ?>
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
            <li><a href="profile.php"><ion-icon name="person-sharp"></ion-icon> Account</a></li>
            <li><a href="#" style="color: #ED553B; font-weight: 600;"><ion-icon name="pencil-sharp" style="color: #df4024"></ion-icon> Edit Profile</a></li>
        </ul>
    </div>

    <div class="edit-profile">
        <form action="edit_profile.php" method="post" enctype="multipart/form-data">
            <h2>Edit Profile</h2>
                <div style="justify-content: center;gap:40px;display:grid;grid-template-columns: auto auto;margin:10px 0; width:100%;">
                    <div class="in-temp">
                        <div class="photo-upload-container">
                            <label for="photo-upload" class="photo-upload-button">
                            <ion-icon name="cloud-upload-outline"></ion-icon>
                            Upload Photo
                            </label>
                            <input type="file" id="photo-upload" name="photo" accept="image/*">
                        </div>
                    </div>                    
                </div>
                <div style="gap:40px;display:grid;grid-template-columns: auto auto; width:100%;">
                    <div class="in-temp">
                        <ion-icon name="person-circle" ></ion-icon><input id="input-temp" type="text" name="username" placeholder="Username"/>
                    </div>
                    <div class="in-temp">
                        <ion-icon name="person-circle-outline"></ion-icon><input id="input-temp" type="text" name="nickname" placeholder="Nickname"/>
                    </div>
                </div>
                    <div class="in-temp">
                        <ion-icon name="mail-outline"></ion-icon><input id="input-temp" type="text" name="email" placeholder="Email Address"/>
                    </div>
                    <div class="in-temp">
                        <ion-icon name="pin-sharp"></ion-icon><input id="input-temp" type="text" name="address" placeholder="Address"/>
                    </div>
                <div style="gap:40px;display:grid;grid-template-columns: auto auto; width:100%;">
                    <div class="in-temp">
                        <ion-icon name="globe"></ion-icon>
                        <select id="input-temp" name="state" placeholder="State">
                            <option value="" disabled selected hidden>State</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="USA">USA</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Philipine">Philipine</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Australia">Australia</option>
                        </select>
                    </div>
                    <div class="in-temp">
                        <img src="../icon/building.png">
                        <select id="input-temp" name="city" placeholder="City">
                            <option value="" disabled selected hidden>City</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="New York">New York</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Manila">Manila</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sydney">Sydney</option>
                        </select>
                    </div>
                </div>
                    <div class="in-temp">
                        <ion-icon name="heart-circle-outline"></ion-icon><input id="input-temp" type="text" name="bio" placeholder="Enter Your Bio Here" required>
                    </div>
            <button class="profile-btn">Save</button>
        </form>
    </div>
    
    </body>
</html>