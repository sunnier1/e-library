<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>
<body>
 <!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="../img/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<div class="header-type-one">    
    <ul>
        <li><a href=""><img src="../icon/fb.png"></a></li>
        <li><a href=""><img src="../icon/threads.png"></a></li>
        <li><a href=""><img src="../icon/twitter (1).png"></a></li>
        <li><a href=""><img src="../icon/instagram.png"></a></li>
    </ul> 
</div>   

<div class="header-type-two">
    <div class="logos">
        <img src="../icon/D'Journals.png" alt="D'Journals Logo">
    </div>
    <div class="search-bar"> 
        <form> 
            <input type="text" id="search_text" autocomplete="off" name="search" class="form_sea" placeholder="Search...">
            <a type="submit" title="Search.." class="search-button" id="gamb"> <img src="../icon/search.png" alt="Search"></a> 
        </form>
    </div> 
    <div class="menu-container">
        <button class="main-button" id="mainButton"><ion-icon name="menu-sharp" size="large" style="color:#521bab"></ion-icon></button>
        <div class="sub-buttons hidden" id="subButtons">
            <button id="account" class="sub-button"><img src="../icon/user.png"></button>
        <?php if(isset($_SESSION['payment_status']) && $_SESSION['payment_status'] == 'paid'): ?>
            <!-- Display upload icon -->
            <button id="upload" class="sub-button" onclick="window.location.href='insert_book.php'"><img src="../icon/special.png"></button>
        <?php else: ?>
            <button id="member-up" class="sub-button" onclick="window.location.href='lockpage.php'"><img src="../icon/crown.png"></button>
        <?php endif; ?>
            <button id="wishlist" class="sub-button" onclick="window.location.href='profile_wishlist.php'"><img src="../icon/wishlist.png"></button>
        </div>
        <!-- Dropdown menu for account options -->
        <div id="accountDropdown" class="dropdown-menu">
            <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
            <a href="edit_profile.php"><ion-icon name="person-circle"></ion-icon>Edit Profile</a>
            <a href="logout.php"><ion-icon name="log-in"></ion-icon>Logout</a>
            <?php else: ?>
                <a href="login.php"><ion-icon name="log-in"></ion-icon>Login</a>
                <a href="register.php"><ion-icon name="create"></ion-icon>Register</a>
                <a href="admin/admin_login.php"><ion-icon name="code-slash"></ion-icon>Login as Administrator</a>
            <?php endif; ?>
        </div>
    </div>
</div>  

<hr style="margin-left:100px;
margin-right: 100px; 
color:rgb(49, 8, 131);
border-width: 0.9px;
background-color: #0056b3;"> 

<script>
setTimeout(function(){
    document.querySelector('.loader_bg').style.display = 'none';
    document.getElementById('main-content').style.display = 'block';
}, 200);

document.getElementById('mainButton').addEventListener('click', function() {
    document.getElementById('subButtons').classList.toggle('show');
});

document.getElementById('account').addEventListener('click', function() {
    document.getElementById('accountDropdown').style.display = 'block';
});

document.querySelector('.menu-container').addEventListener('mouseleave', function() {
    document.getElementById('accountDropdown').style.display = 'none';
});
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>
