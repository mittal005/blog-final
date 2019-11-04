<?php session_start(); ?>

<?php 

if(!isset( $_SESSION['username'])) {

header("location: login.php");

} 




 ?>
