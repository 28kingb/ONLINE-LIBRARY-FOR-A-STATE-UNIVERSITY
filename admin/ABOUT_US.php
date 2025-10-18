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

<!--ABOUT Page -->
<section class="main4">
<div class="navbar">
<h2 class="logo">Lowa State University<h2>
<div class="menu">
<ul>
  <li><a href="HOME.php">HOME</a></li>
  <li><a href="BOOKS.php">BOOKS</a></li>
  <li><a href="ABOUT_US.php">ABOUT</a></li>
  <li><a href="CONTACT.php">CONTACT</a></li>
  <li><a href="REGISTER.php">REGISTER</a></li>
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
ABOUT US
</font>
</marquee>
</h1>
</section>
<!--ABOUT Page -->

<!--image slider-->
<div class="slider">
<div class="slide active">
<img src="images/work.jpg" alt="">
<div class="info">
<h2>Our Workers</h2>
<p><font color="#233254">Employees who take responsibility for their actions, are dependable, arrive on time, do what they say, and don't let the others in their team down, are highly valued employees.</font></p>
</div>
</div>
<div class="slide">
<img src="images/build.jpg" alt="">
<div class="info">
<h2>Our Main Hall</h2>
<p><font color="#ffffff">The largest (and hence most prestigious) stage in a theatre complex, performance venue, or outdoor event (such as a music festival).</font></p>
</div>
</div>
<div class="slide">
<img src="images/students.jpg" alt="">
<div class="info">
<h2>Our Team</h2>
<p><font color="#000000">Clever marketing and design inspiration from the best team pages on the web, These details make the team and the company and brand that much more.</font></p>
</div>
</div>
<div class="slide">
<img src="images/grad.jpg" alt="">
<div class="info">
<h2>Our Best Graduations</h2>
<p><font color="#ffffff">“Congratulations on your graduation and best wishes for your next adventure!” “So happy to share in the excitement of your graduation day.</font></p>
</div>
</div>
<div class="slide">
<img src="images/inter.png" alt="">
<div class="info">
<h2>Our Interviewer's</h2>
<p><font color="#000000">Interviewers will ask questions about you to gain insight into your personality and to determine whether you're a fit for both the job and the personality.</font></p>
</div>
</div>
<div class="navigation">
<i class="fas fa-chevron-left prev-btn"></i>
<i class="fas fa-chevron-right next-btn"></i>
</div>
<div class="navigation-visibility">
<div class="slide-icon active"></div>
<div class="slide-icon"></div>
<div class="slide-icon"></div>
<div class="slide-icon"></div>
<div class="slide-icon"></div>
</div>
</div>

<!--javascript-->
<script type="text/javascript">
const slider = document.querySelector(".slider");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const slides = document.querySelectorAll(".slide");
const slideIcons = document.querySelectorAll(".slide-icon");
const numberOfSlides = slides.length;
var slideNumber = 0;

//image slider next button
nextBtn.addEventListener("click", () => {
slides.forEach((slide) => {
slide.classList.remove("active");
});
slideIcons.forEach((slideIcon) => {
slideIcon.classList.remove("active");
});
slideNumber++
if(slideNumber > (numberOfSlides - 1)){
slideNumber = 0;
}
slides[slideNumber].classList.add("active");
slideIcons[slideNumber].classList.add("active");
});

//image slider previous button
prevBtn.addEventListener("click", () => {
slides.forEach((slide) => {
slide.classList.remove("active");
});
slideIcons.forEach((slideIcon) => {
slideIcon.classList.remove("active");
});
slideNumber--;
if(slideNumber < 0){
slideNumber = numberOfSlides - 1;
}
slides[slideNumber].classList.add("active");
slideIcons[slideNumber].classList.add("active");
});
//image slider autoplay

var playSlider
var repeater = () => {
playSlider = setInterval(function(){
slides.forEach((slide) => {
slide.classList.remove("active");
});
slideIcons.forEach((slideIcon) => {
slideIcon.classList.remove("active");
});
slideNumber++;
if(slideNumber > (numberOfSlides - 1)){
slideNumber = 0;
}
slides[slideNumber].classList.add("active");
slideIcons[slideNumber].classList.add("active");
}, 4000);
}
repeater();
//stop the image slider autoplay on mouseover

slider.addEventListener("mouseover", () => {
clearInterval(playSlider);
});
//start the image slider autoplay again on mouseout

slider.addEventListener("mouseout", () => {
repeater();
});
</script>
<!--javascript-->
<!--image slider-->

<!--Eduaction we offer-->
<section class="design">
<section class="course">
<h1> Education We Offer</h1>
<p>We have all the programmes available come and join us.</p>
<div class="row">
<div class="course-col">
<h3>Language Learners</h3>
<p>English-language learners, or ELLs, are students who are unable to communicate fluently or learn effectively in English, who often come from non-English-speaking homes and backgrounds, and who typically require specialized or modified instruction in both the English language and in their academic courses.</p>
</div>
<div class="course-col">
<h3>Bachelor Degree's</h3>
<p>A bachelor's degree (from Middle Latin baccalaureus) or baccalaureate (from Modern Latin baccalaureatus) is an undergraduate academic degree awarded by colleges and universities upon completion of a course of study lasting three to six years</p>
</div>
<div class="course-col">
<h3>Master's Degree's</h3>
<p>A master's degree (from Latin magister) is an academic degree awarded by universities or colleges upon completion of a course of study demonstrating mastery or a high-order overview of a specific field of study or area of professional practice.</p>
</div>
</div>
</section>
</section>
<!--Education we offer-->

<!--Branch-->
<section class="branch">
<section class="company">
<h1> Our Global Branches</h1>
<p>You are freely welcomed around all our branches.</p>
<div class="row">
<div class="company-col">
<img src="Images/london.png">
<div class="layer">
<h3>LONDON</h3>
</div>
</div>
<div class="company-col">
<img src="Images/newyork.png">
<div class="layer">
<h3>NEW YORK</h3>
</div>
</div>
<div class="company-col">
<img src="Images/washington.png">
<div class="layer">
<h3>WASHINGTON</h3>
</div>
</div>
</div>
</section>
</section>
<!--Branch-->

<!--testimonial-->
<section ="ceo">
<section class="testimonials">
<h1>What Our Professors Says</h1>
<p>Iowa State University is a public, land-grant university, where students get a great academic start in learning communities and stay active in 800-plus student organizations, undergrad research, internships and study abroad. They learn from world-class scholars who are tackling some of the world's biggest challenges -- feeding the hungry, finding alternative fuels and advancing manufacturing.</p>
<div class="row">
<div class="testimonial-col">
<img src="Images/person1.jpg">
<div>
<p>Clayton Conrad Anderson (born February 23, 1959) is a retired NASA astronaut. Launched on STS-117, he replaced Sunita Williams on June 10, 2007 as a member of the ISS Expedition 15 crew.[1] He is currently an author, a motivational speaker, and a Professor of Practice at Iowa State University in Ames, Iowa.</p>
<h3>Clayton Anderson</h3>
<ion-icon name="star"></ion-icon>
<ion-icon name="star"></ion-icon>
<ion-icon name="star"></ion-icon>
<ion-icon name="star"></ion-icon>
<ion-icon name="star-half"></ion-icon>
</div>
</div>
<div class="testimonial-col">
<img src="Images/person2.jpg">
<div>
<p>George Washington Carver (c. 1864[1] – January 5, 1943) was an American agricultural scientist and inventor who promoted alternative crops to cotton and methods to prevent soil depletion.[2] He was the most prominent black scientist of the early 20th century.</p>
<h3>George Washington Carver</h3>
<ion-icon name="star"></ion-icon>
<ion-icon name="star"></ion-icon>
<ion-icon name="star"></ion-icon>
<ion-icon name="star"></ion-icon>
<ion-icon name="star-half"></ion-icon>
</div>
</div>
</div>
</section>
</section>
<!--testimonial-->

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
