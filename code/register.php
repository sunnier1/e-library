<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Business</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
   <div class="header-type-one">    
        <ul>
            <li><a href=""><img src="../icon/fb.png"></a></li>
            <li><a href=""><img src="../icon/threads.png"></a></li>
            <li><a href=""><img src="../icon/twitter (1).png"></a></li>
            <li><a href=""><img src="../icon/instagram.png"></a></li>
        </ul> 
   </div>   
    <!--Bottom  Navigation-->
    <div class="r-bottom">
        <ul>
            <li><a href>About</a></li>
            <li><a href>Term of Use</a></li>
            <li><a href>Privasy Policy</a></li>
            <li><a href>Cookie Policy</a></li>
            <li><a href>Copyright Policy</a></li>
            <li><a href>Brand Policy</a></li>
            <li><a href>Visitor Controls</a></li>
        </ul>
    </div>

    <!-- Sign Up form -->
    <div class="container-fly" style="left:250px;">
        <li>English</li>
        <li><a href="login.php" class="btn-primary" style="text-decoration: none;">Sign In</a></li>
        <li>
            <p class="content"> Register! </p>
        </li>
        <form action="register.php" method="post" on submit="return validatePassword()">
            <h2 style="text-align:center;">Sign Up</h2>
            <div class="input-field">
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Enter Email or Phone">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" style="margin-bottom:30px;">
            </div>
            <button class="btn-secondary" type ="submit">Sign Up</button>
            <p style="text-align: center">or continue with</p>
            <div class="logo-horizontal">
                <button class="logo">
                    <img src="../icon/google.png"> 
                </button>
                <button class="logo">
                    <img src="../icon/facebook.png">
                </button>
                <button class="logo">
                    <img src="../icon/apple-logo.png">
                </button>
            </div>
        </form>
        <p>By clicking on 'Sign up', you agree to our Term </p>
    </div>

    <!--Content-->
    <div class="container-content">
        <h1 style = 'margin-right:40px; font-size:50px;'>Welcome to</h1>
        <h1><i>D'Journals<sup>&reg;</sup></i></h1>
        <p style = 'margin-right:4px'>
            D'Journals is a website that provides journals and books which users can both read and write,
            enhancing their learning experience. Users have access to a wide range of academic materials
            and literature, available for free or pay with the exclusive books . With interactive reading
            and writing features, users can share thoughts. D'Journals fosters dynamic learning and
            knowledge-sharing experiences, supporting users' self-development across various fields of study.
        </p>
        <img src="../icon/temp.png" />
    </div>
    <script>
        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (password != confirm_password) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }

        function showAlert(message) {
            alert(message);
        }
    </script>
</body>

</html>

<?php 
session_start();

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["username"]));
    $email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["email"]));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["password"]));
    $confirm_password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["confirm_password"]));
    
    if ($password != $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
        exit();
    }
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "SELECT * FROM user WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "<script>alert('Username or email has already been used.');</script>";
    } else {
        $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registration successful');</script>";
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>