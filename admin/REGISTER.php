<?php
include "connection.php";
 ?>
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
ADMIN REGISTRATION
</font>
</marquee>
</h1>
</div>
<!--REGISTER Page -->

<!--Register Form-->
<section class="Register">
<div class="wrapper">
<div class="inner">
<div class="image-holder">
<img src="Images/img.jpg" alt="image">
</div>
<form name="Registration" method="post">
<h3>Registration Form</h3>

<div class="form-group">
<input type="text" name="first" placeholder="First Name" required="" class="form-control">
<input type="text" name="last" placeholder="Last Name" required="" class="form-control">
<input type="text" name="dob" placeholder="Date of Birth" required="" class="form-control">
</div>
<div class="form-wrapper">
<input type="text" name="username" placeholder="Username" required="" class="form-control">
</div>

<div class="form-wrapper">
<input type="text" name="email" placeholder="Email Address" required="" class="form-control">
<input type="text" name="contact" placeholder="Phone No" required="" class="form-control">
<input type="text" name="address" placeholder="Address" required="" class="form-control">
</div>

<div class="form-wrapper">
<select name="gender" id="" class="form-control">
<option value="" disabled selected>Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Other</option>
</select>
</div>
<div class="form-wrapper">
<select name="type" id="" class="form-control">
<option value="" disabled selected>Type</option>
<option value="professor">Porfessor</option>
<option value="student">Student</option>
</select>
</div>

<div class="form-wrapper">
<input type="password" name="password" placeholder="Password" required="" class="form-control">
</div>
<button name="submit">Register</button>
</form>
</div>
</div>
</section>
<!--Register Form-->

<!--footer-->
<section class="footer">
<div class="footer-content">
<h3>LOWA STATE UNIVERSITY</h3>
<p>Made with Made with<ion-icon name="heart-outline"></ion-icon> by The Lowa State University</p>
<ul class="socials">
<li><a href="https://www.facebook.com/IowaStateU"><ion-icon name="logo-facebook"></ion-icon></a></li>
<li><a href="https://twitter.com/IowaStateU"><ion-icon name="logo-twitter"></ion-icon></a></li>
<li><a href="https://www.linkedin.com/school/iowastateu/"><ion-icon name="logo-linkedin"></ion-icon></a></li>
<li><a href="https://www.instagram.com/iowastateu/"><ion-icon name="logo-instagram"></ion-icon></a></li>
</ul>
</div>
<div class="footer-bottom">
<p><font size="1px">Copyright 1995-2021 Lowa State University of Science and Technology All right reserved.
Non-discrimination Policy Privacy Policy Digital Access & Accessibility Consumer Infomrationv</font></p>
</div>
</section>
<!--footer-->

<!--php coding-->
            <?php
            if(isset($_POST['submit']))
            {
              $count=0;
              $sql="SELECT username from admin";
              $res=mysqli_query($db,$sql);

              while($row=mysqli_fetch_assoc($res))
              {
                if($row['username']==$_POST['username'])
                {
                  $count=$count+1;
                }
              }
              if($count==0)
              {mysqli_query($db,"INSERT INTO `ADMIN` VALUES('','$_POST[first]','$_POST[last]','$_POST[dob]','$_POST[username]','$_POST[email]','$_POST[contact]','$_POST[address]','$_POST[gender]','$_POST[type]','$_POST[password]');");
            }
             ?>
             <script type="text/javascript">
             alert("Registration successfully");
             </script>
             <?php
           }
           else
           {
             ?>
             <script type="text/javascript">
             alert("The Member No already existed.");
             </script>
             <?php
         }
              ?>
<!--php coding-->
  </body>
</html>
