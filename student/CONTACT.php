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
<script type="text/javascript" src="js/Jquery.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
</head>
<body>

<!--CONTACT Page -->
<section class="main5">
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
CONTACT US
</font>
</marquee>
</h1>
 <div style="color: white">
</section>
<!--CONTACT Page -->

<!--Contact-->
<section class="contact">
<section class="location">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976373946234!3d40.69766374859258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2slk!4v1627529083479!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<section class="contact-us">
<div class="row">
<div class="contact-col">
<div>
<ion-icon name="home"></ion-icon>
<span>
<h5> &nbsp Ames, IA 50011,</h5>
<p> &nbsp  lowa, United States</p>
</span>
</div>
<div>
<ion-icon name="call"></ion-icon>
<span>
<h5> &nbsp +15 152944111</h5>
<p> &nbsp Monday to Saturday, 10AM to 6PM</p>
</span>
</div>
<div>
<ion-icon name="mail-open"></ion-icon>
<span>
<h5> &nbsp contact@iastate.edu</h5>
<p> &nbsp Email us your query</p>
</span>
</div>
</div>
<div class="contact-col">
<h4 class="sent-notification"></h4>
<form method="post" name="myForm">
<input type="text" name="name" placeholder="Enter your name" required="" class="con-control">
<input type="email" name="email" placeholder="Enter your email address" required=""  class="con-control">
<input type="text" name="title" placeholder="Enter your title" required="" class="con-control">
<textarea rows="8" name="message" placeholder="message" required="" class="con-control"></textarea>
<button type="submit" class="hero-btn red-btn" onclick="sendEmail()" value="Send an Email">Send Message</button>
</form>
</div>
</div>
</section>
<script type="text/javascript">
function sendEmail(){
  var name = $("#name");
  var email = $("#email");
  var title = $("#title");
  var message = $("#message");

  if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(title) && isNotEmpty(message)){
    $.ajax({
      url: 'sendEmail.php',
      method: 'POST',
      dataType: 'Json',
      data:{
        name: name.val(),
        email: email.val(),
        title: title.val(),
        message: message.val()
      }, success: function(response){
        $('#myForm')[0].reset();
        $('sent-notification').text("Message sent successfully.");
      }
    });
  }
}
function isNotEmpty(caller){
  if(caller.val()==""){
    caller.css('border','1px solid red');
    return false;
  }
  else
  {
  caller.css('border', '');
  return true;
  }
}
</script>
<!--Contact-->

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
