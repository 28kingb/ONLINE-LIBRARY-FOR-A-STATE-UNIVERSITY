<!--DB CONNECTION-->
<?php
include "connection.php";
include "navbar.php";
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
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

  <!--sidenav-->
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Book.php">Book</a>
  <a href="ADD.php">Add Books</a>
  <a href="REQUEST.php">Book Request</a>
  <a href="ISSUE_INFO.php">Issue Information</a>
  <a href="expired.php">Expired List</a>
  <a href="fine.php">Fines</a>
  </div>
  <div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  </div>

  <script>
  function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }

  function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
  }
  </script>
  <!--sidenav-->

<!--Approve form-->
<section class="Register2">
<div class="wrapper">
<div class="inner">
<div class="image-holder">
<img src="Images/img1.jpg" alt="image">
</div>
<h3>Approve Request</h3>
<form class="approve" method="post">
<div class="form-group">
<input type="text" name="approve" placeholder="Yes or No" required="" class="form-control">
</div>
<div class="form-group">
<input type="text" name="issue" placeholder="Issue Date yyyy-mm-dd" required="" class="form-control">
</div>
<div class="form-group">
<input type="text" name="returned" placeholder="Return Date yyyy-mm-dd" required="" class="form-control">
</div>
<button name="submit" type="submit">Approve</button>
</form>
</div>
</div>
</section>
<?php
  if(isset($_POST['submit']))
  {
    mysqli_query($db,"UPDATE  `issue_book` SET  `approve` =  '$_POST[approve]', `issue` =  '$_POST[issue]', `returned` =  '$_POST[returned]' WHERE username='$_SESSION[name]' and bid='$_SESSION[bid]';");

    mysqli_query($db,"UPDATE books SET quantity = quantity-1 where bid='$_SESSION[bid]' ;");

    $res=mysqli_query($db,"SELECT quantity from books where bid='$_SESSION[bid];");

    while($row=mysqli_fetch_assoc($res))
    {
      if($row['quantity']==0)
      {
        mysqli_query($db,"UPDATE books SET status='not-available' where bid='$_SESSION[bid]';");
      }
    }
    ?>
      <script type="text/javascript">
        alert("Updated successfully.");
        window.location="REQUEST.php"
      </script>
    <?php
  }
?>
<!--Approve form-->


</body>
</html>
