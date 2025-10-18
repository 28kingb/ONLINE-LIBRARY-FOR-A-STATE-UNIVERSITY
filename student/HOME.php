<!--DB CONNECTION-->
<?php
include "connection.php";
session_start();
 ?>
<!--DB CONNECTION-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lowa State University Library</title>
<link rel="stylesheet" href="style.css" type="text/css" media="all">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>

<!--Home Page -->
<div class="main">
<div class="navbar">
<div="icon">
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
<div style="color: white">
</div>
<div class="content">
<h1>ALL THE WORLD CITIZEN ARE FREELY WELCOMED<br><span>Moving Forward |</span><br>COVID-19 Vaccination and Information</h1>
<p class="par"><font color="white">Iowa State University is a public, land-grant university,<br> where students get a great academic start in learning communities and <br> stay active in 800-plus student organizations, undergrad research,<br>internships and study abroad. They learn from world-class scholars <br>who are tackling some of the world's biggest challenges -- feeding the hungry,
<br>finding alternative fuels and advancing manufacturing.</font></p>
<button class="cn"><a href="ABOUT_US.php">JOIN US</a></button>
<!--Home Page -->

<!--Login Form-->
<form method="post">
<div class="form">
<h2>Login Here</h2>
<input type="text" name="username" placeholder="Username" required="">
<input type="password" name="password" placeholder="Password" required="">
<button class="btnn" name="submit" type="submit">Login</button>

<p class="link"> Don't have an account<br>
<a href="REGISTER.php">Sign up</a> here</p>
<p class="link2">
<a href="UPDATE_PASSWORD.php">Forgot</a> password</p>
<p class="liw">Log in with</p>
</div>
</div>
</div>
</from>
<!--Login Form-->

<!--PHP Coding-->
            <?php
            if(isset($_POST['submit']))
            {
            $count=0;
            $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
            $count=mysqli_num_rows($res);
            if($count==0)
            {
            ?>
<!--PHP Coding-->
<!--javascript Coding-->
            <script type="text/javascript">
            alert("The Username and Password doesn't match.");
            </script>
<!--javascript Coding-->
            <?php
            }
            else
            {
              $_SESSION['login_user'] = $_POST['username'];
            ?>
<!--javascript Coding-->
            <script type="text/javascript">
             window.location="Book.php"
             </script>
<!--javascriptss Coding-->
<!--PHP Coding-->
             <?php
             }
             }
             ?>
<!--PHP Coding-->

<!--Footer-->
<footer>
<div class="waves">
  <div class="wave" id="wave1"></div>
  <div class="wave" id="wave2"></div>
  <div class="wave" id="wave3"></div>
  <div class="wave" id="wave4"></div>
</div>
<ul class="social_icon">
<li><a href="https://www.facebook.com/IowaStateU"><ion-icon name="logo-facebook"></ion-icon></a></li>
<li><a href="https://twitter.com/IowaStateU"><ion-icon name="logo-twitter"></ion-icon></a></li>
<li><a href="https://www.linkedin.com/school/iowastateu/"><ion-icon name="logo-linkedin"></ion-icon></a></li>
<li><a href="https://www.instagram.com/iowastateu/"><ion-icon name="logo-instagram"></ion-icon></a></li>
</ul>
<ul class="menu">
<li><a href="Home.php">HOME</a></li>
<li><a href="BOOKS.php">BOOKS</a></li>
<li><a href="ABOUT_US.php">ABOUT</a></li>
<li><a href="CONTACT.php">CONTACT</a></li>
<li><a href="REGISTER.php">REGISTER</a></li>
</ul>
<p>Made with Made with <ion-icon name="heart-outline"></ion-icon> by The Lowa State University</p>
<p><font size="1px">Copyright 1995-2021 Lowa State University of Science and Technology All right reserved.<br>Non-discrimination Policy Privacy Policy Digital Access & Accessibility Consumer Infomration</font></p>
</footer>
<!--Footer-->

  </body>
</html>
