<?php 
$conn = mysqli_connect("localhost", "root","","ebiz");
if(!$conn){
    die("connection fatal" . mysqli_connect_error());
}
?>