<?php
session_start();
include("connection.php");

function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$error = ''; 

if(isset($_POST['submit'])) {
    $username_or_email = input($_POST['username']);
    $password = input($_POST['password']);

    if(empty($username_or_email) || empty($password)) {
        $error = "Username/email and password are required";
    } else {
        if (filter_var($username_or_email, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT * FROM user WHERE email = '$username_or_email'";
        } else {
            $sql = "SELECT * FROM user WHERE username = '$username_or_email'";
        }

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $row['username'];
                header("location: homepage.php");
                exit();
            } else {
                $error = "Your email or password is wrong";
            }
        } else {
            $error = "Your email or password is wrong";
        }
    }
}
?>

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
    <div class = "r-bottom">
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

    <!-- Login form -->
    <div class="container_fly">
        <li>English</li>
        <li><p class = "content"> LOG IN </p> </li>
        <li><a href="register.php" class = "btn-primary" style="text-decoration: none;">Sign Up</a></li>
        <form action="login.php" method="post">
            <h2 style="text-align:center;">SIGN IN</h2>
                <div class="input-field">
                    <input type="text" id="username" name="username" placeholder="Enter Email or Username">
                    <input type="password" id="password" name="password" placeholder="Password" style="margin-bottom:20px;">
                    <a href="forgetpass.php" style="text-decoration:none; color:darkblue">Forgot Password?</a>
                </div>
                <?php if($error): ?>
                    <div style="color: red; text-align: center; margin-bottom: 10px;">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                <button type="submit"name="submit" class ="btn-secondary">Login</button>
                <p style="text-align: center">or continue with</p>
                <div class = "logo-horizontal">
                    <button class ="logo">
                        <img src = "../icon/google.png">
                    </button>
                    <button class ="logo">
                        <img src = "../icon/facebook.png">
                    </button>
                    <button class ="logo">
                        <img src = "../icon/apple-logo.png">
                    </button>
                </div>
        </form>
    </div>

    <!--Content-->
    <div class = "container_">
        <h1>Welcome to</h1>
        <h1><i>D'Journals<sup>&reg;</sup></i></h1>
        <p style="text-align: justify; display:block;">
        D'Journals is a website that provides journals and books which users can both read and write, 
        enhancing their learning experience. Users have access to a wide range of academic materials 
        and literature, available for free or pay with the exclusive books . With interactive reading 
        and writing features, users can share thoughts. D'Journals fosters dynamic learning and 
        knowledge-sharing experiences, supporting users' self-development across various fields of study.
        </p>
        <img src = "../icon/temp.png"/>
    </div>
</body>
</html>



