<?php
include "connection.php"
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Change Password</title>
</head>
<body>

  <!--DB CONNECTION-->
  <!doctype html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Lowa State University Library</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/Jquery.js"></script>
  <script type="text/javascript" src="js/lightslider.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </head>
  </head>
  <body>

  <!--REGISTER Page -->
  <div class="main3">
  <div class="navbar">
  <h2 class="logo">Lowa State University<h2>
  <div class="menu">
  <ul>
  <li><a href="HOME.php">HOME</a></li>
  <li><a href="BOOKS.php">BOOKS</a></li>
  <li><a href="ABOUT_US.php">ABOUT</a></li>
  <li><a href="CONTACT.php">CONTACT</a></li>
  <li><a href="REGISTER.php">REGISTER</a></li>
  </ul>
  </div>
  </div>
  <h1>
  <marquee behavior="alternate" direction="left" scrollamount="5">
  <font face="arial" color="#ffffff" size="35">
  LOWA STATE UNIVERSITY
  </font>
  </marquee>
  </h1>
  <h1>
  <marquee behavior="alternate" direction="right" scrollamount="5">
  <font face="arial" color="#FFFFFF" size="35">
  CHANGE YOUR PASSWORD
  </font>
  </marquee>
  </h1>
  </div>
  <!--REGISTER Page -->

<!--change password form-->
<section class="Register">
<div class="wrapper">
<div class="inner">
<div class="image-holder">
<img src="Images/img2.jpg" alt="image">
</div>
<form name="Registration" method="post">
<h3>Change Your Password</h3>
<div class="form-wrapper">
<input type="text" name="username" placeholder="Username" required="" class="form-control">
<input type="text" name="email" placeholder="Email" required="" class="form-control">
</div>
<div class="form-wrapper">
<input type="password" name="password" placeholder="New Password" required="" class="form-control">
</div>
<button name="submit">Update</button>
</form>
</div>
</div>

<?php

if(isset($_POST['submit']))
{
if(mysqli_query($db,"UPDATE `admin` SET password='$_POST[password]' WHERE username='$_POST[username]'
AND email='$_POST[email]' ;"))
{
?>
<script type="text/javascript">
alert("The Password Updated Successfully.");
</script>

<?php
}

}
?>

</section>
<!--change password form-->

<!--footer-->
<section class="footer">
<div class="footer-content">
<h3>LOWA STATE UNIVERSITY</h3>
<p>Made with Made with<ion-icon name="heart-outline"></ion-icon> by The Lowa State University</p>
<ul class="socials">
<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
</ul>
</div>
<div class="footer-bottom">
<p><font size="1px">Copyright 1995-2021 Lowa State University of Science and Technology All right reserved.
Non-discrimination Policy Privacy Policy Digital Access & Accessibility Consumer Infomration</font></p>
</div>
</section>
<!--footer-->

</body>
</html>
