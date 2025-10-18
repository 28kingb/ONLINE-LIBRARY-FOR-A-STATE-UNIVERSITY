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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lowa State University Library</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<link rel="stylesheet" href="style.css" type="text/css" media="all">
<script type="text/javascript" src="js/Jquery.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
  height: 90px;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {

  height:auto;
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #3e7def;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #132178;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
.form-control-delete::-webkit-input-placeholder {
  font-size: 14px;
  color: gray;
  font-family: arial;
}
.form-control-request::-webkit-input-placeholder {
  font-size: 14px;
  color: gray;
  font-family: arial;
}
.Product{
  background-color: #b3ffda;
  background-size: 100%;
}
.book-img img{
  height: 300px;
  width: 220px;
  padding-left: 75px;
  padding-top: 50px;
	transition: 0.5s;
}
.book-img2 img{
  height: 300px;
  width: 220px;
  padding-left: 75px;
  padding-top: 50px;
}
.book-img3 img{
  height: 300px;
  width: 220px;
  padding-left: 75px;
  padding-top: 50px;
  padding-bottom: 50px;
}
</style>
</head>
<body>

<!--BOOK Page -->
<section class="main2">
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
OUR BOOKS
</font>
</marquee>
</h1>
 <div style="color: white">
</div>
</section>
<!--BOOK Page -->

<!-- Swiper -->
<section class="swiper">
<h1>LATEST BOOKS</h1>
<div class="swiper mySwiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
<img src="images/16.jpg" />
<p style="text-align:center; color:white;">C# 60</p>
</div>
<div class="swiper-slide">
<img src="images/17.jpg" />
<p style="text-align:center; color:white;">Doing Good</p>
</div>
<div class="swiper-slide">
<img src="images/18.jpg" />
<p style="text-align:center; color:white;">Logic</p>
</div>
<div class="swiper-slide">
<img src="images/19.jpg" />
<p style="text-align:center; color:white;">Mobile App Development</p>
</div>
<div class="swiper-slide">
<img src="images/20.jpg" />
<p style="text-align:center; color:white;">ASP.NET 4</p>
</div>
<div class="swiper-slide">
<img src="images/21.jpg" />
<p style="text-align:center; color:white;">Javascript</p>
</div>
<div class="swiper-slide">
<img src="images/22.jpg" />
<p style="text-align:center; color:white;">Learn Web App Development</p>
</div>
<div class="swiper-slide">
<img src="images/23.jpg" />
<p style="text-align:center; color:white;">Android Studio</p>
</div>
<div class="swiper-slide">
<img src="images/24.jpg" />
<p style="text-align:center; color:white;">Beautiful Javascript</p>
</div>
<div class="swiper-slide">
<img src="images/25.jpg" />
<p style="text-align:center; color:white;">C++ 14</p>
</div>
</div>
<div class="swiper-pagination"></div>
</div>
</section>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
effect: "coverflow",
grabCursor: true,
centeredSlides: true,
slidesPerView: "auto",
coverflowEffect: {
rotate: 50,
stretch: 0,
depth: 100,
modifier: 1,
slideShadows: true,
},
pagination: {
el: ".swiper-pagination",
},
});
</script>
<!--slider-->

<!--STORE-->
<section class="Product" id="home">
<br>
<h1 style="text-align:center;">Library Books</h1>
<br>
<div class="book-img">
<a href="HOME.php"><img src="images/1.jpg" alt=""></a>
<a href="HOME.php"><img src="images/2.jpg" alt=""></a>
<a href="HOME.php"><img src="images/3.jpg" alt=""></a>
<a href="HOME.php"><img src="images/4.jpg" alt=""></a>
</div>
<div class="book-img2">
<a href="HOME.php"><img src="images/5.jpg" alt=""></a>
<a href="HOME.php"><img src="images/6.jpg" alt=""></a>
<a href="HOME.php"><img src="images/7.jpg" alt=""></a>
<a href="HOME.php"><img src="images/8.jpg" alt=""></a>
</div>
<div class="book-img3">
<a href="HOME.php"><img src="images/9.jpg" alt=""></a>
<a href="HOME.php"><img src="images/10.jpg" alt=""></a>
<a href="HOME.php"><img src="images/11.jpg" alt=""></a>
<a href="HOME.php"><img src="images/12.jpg" alt=""></a>
</div>
<br>
<br>
</section>
<!--STORE-->


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
Non-discrimination Policy Privacy Policy Digital Access & Accessibility Consumer Infomration</font></p>
</div>
</section>
<!--footer-->
</body>
</html>
