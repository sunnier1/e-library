<?php
include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        echo "Login successful. Redirecting to dashboard...";
        header("location: admin_payment.php");
        exit(); 
    } else {
        echo "Invalid username or password. Please try again.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Business</title>
    <link rel="stylesheet" href="../css/style.css">
    <style> 
body{
	font-family: sans-serif;
	background: #d5f0f3;
}
 
h1{
	text-align: center;
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	text-transform: uppercase;
}
 
.login{
	width: 350px;
	background: white;
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.btn_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box; 
}
body{
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: 100vh;
}
.container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #ffffff;
    color: #eb0000;
    border-radius: 10px;
    border: 1px solid #000000;
    width: 25rem;
    padding: 5rem 2rem;
    box-shadow: 0px 0px 20px 0px black;
}
.title-form{
    color: bl;
    text-transform: uppercase;
    letter-spacing: 5px;
    word-spacing: 50px;
    font-size: 2rem;
    margin-bottom: 2rem;
}
#username,
#password{
    border: 2px solid cyan;
    margin: 1rem;
    padding: 1rem 2rem;
    border-radius: 3rem;
    width: 15rem;
    font-size: 1.2rem;
    outline: none;
    text-align: center;
    background:#b4edb6;
    transition: all .2s ease-in-out;
}
#username:focus,
#password:focus{
    width: 20rem;
    animation-name: color-change;
    animation-duration: 10s;
    animation-timing-function: ease;
    animation-iteration-count: infinite;
}
@keyframes color-change {
    0%{
        border-color: green;
        color: green;
    }
    10%{
        border-color: yellow;
        color: yellow;
    }
    20%{
        border-color: hotpink;
        color: hotpink;
    }
    30%{
        border-color: red;
        color: red;
    }
    40%{
        border-color: purple;
        color: purple;
    }
    50%{
        border-color: chocolate;
        color: chocolate;
    }
    60%{
        border-color: darkblue;
        color: darkblue;
    }
    70%{
        border-color: hotpink;
        color: hotpink;
    }
    80%{
        border-color: darkcyan;
        color: darkcyan;
    }
    90%{
        border-color: crimson;
        color: crimson;
    }
    100%{
        border-color: cyan;
        color: cyan;
    }
}

.login-btn{
    padding: 1rem 3rem;
    border: 2px solid green;
    background: transparent;
    border-radius: 6rem;
    font-size: 1.5rem;
    color: green;
    transition: all .5s;
    cursor: pointer;
}
.login-btn:hover{
    background: green;
    color: white;
    
}

	* {
		box-sizing: border-box;
	}

	body {
		background-image: url("https://www.example.com/background.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}

	.container {
		background-color: rgba(255, 255, 255, 0.9);
		max-width: 400px;
		margin: 0 auto;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	}

	.title-form {
		text-align: center;
		font-size: 28px;
		font-weight: bold;
		margin-bottom: 20px;
	}

	input[type="text"], input[type="password"] {
		width: 100%;
		padding: 10px;
		margin-bottom: 20px;
		border-radius: 5px;
		border: none;
		background-color: #f2f2f2;
	}

	.login-btn {
		background-color: #4CAF50;
		color: white;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}

	.login-btn:hover {
		background-color: #45a049;
	}

	a {
		color: #4CAF50;
	}

	a:hover {
		color: #45a049;
	}

	.error-message {
		display: block;
		margin-top: 10px;
		color: red;
	}
	</style>
</head>
<body>

	<form action="admin_payment.php" method="post">
		<div class="container">
			<h2 class="title-form">Login</h2>
			<input type="text" name="email" id="username" placeholder="Email">
			<input type="password" name="password" id="password" placeholder="Password">
			<button type = "submit" name = "Go" class="login-btn">Login</button>
		</div>
	</form>

</body>
</html>
