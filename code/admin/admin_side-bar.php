<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Dashboard</div>
        <ul class="list-items">
          <li><a href="admin_page.php"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="admin_products.php"><i class="fa-solid fa-box-archive"></i>Products</a></li>
          <li><a href="admin_orders.php"><i class="fa-solid fa-file-lines"></i>Orders</a></li>
          <li><a href="admin_purchase.php"><i class="fa-solid fa-file-invoice-dollar"></i>Purchase</a></li>
          <li><a href="admin_expenditure.php"><i class="fas fa-stream"></i>Expenditure</a></li>
          <li><a href="employee.php"><i class="fa-solid fa-user-tie"></i>Employee</a></li>
          <li><a href="#"><i class="fa-solid fa-dolly"></i>Record Goods</a></li>
          <li><a href="#"><i class="fa-solid fa-file-invoice"></i>Account Payable</a></li>
          <li><a href="#"><i class="fa-solid fa-file-invoice"></i>Account Receivable</a></li>
          <div class="icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </ul>
      </nav>
</div>

<script>
let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}
</script>