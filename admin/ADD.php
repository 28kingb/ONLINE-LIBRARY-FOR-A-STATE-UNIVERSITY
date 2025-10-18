<!--DB CONNECTION-->
<?php
include "connection.php";
include "navbar.php";
 ?>
<!--DB CONNECTION-->
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lowa State University Library</title>
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
.listofbooks{
  height: 3500px;
}
.listofbooks h2{
  color: #03040a;
  background: #ffffff;
  height: 110px;
  font-size: 50px;
}
.listofbooks table {
  border-collapse: collapse;
  width: 100%;
}
.listofbooks th{
  color: white;
}
.listofbooks th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #b7b8c7;
}

.listofbooks tr:hover {background-color: #b7b8c7;;}
button {
  border: none;
  width: 164px;
  height: 51px;
  margin: auto;
  margin-top: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #333;
  font-size: 15px;
  color: #fff;
}
button:hover{
  background: orange;
}
.addbookpage{
  background-size: cover;
}
.addbook-container {
  padding: 16px;
  background-color: #b4b9f0;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px 0px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background:  #747ccf;
}

input[type=text]:focus, input[type=password]:focus {
  background-color:#c2e9fc;
  outline: none;
}

hr {
  border: 1px solid #7a7777;
  margin-bottom: 25px;
}

.add-book-btns {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.add-book-btnss:hover {
  opacity: 1;
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


<!--add books-->
<section class="addbookpage">
<form action="" method="post">
<div class="addbook-container">
<h1>Add New Books</h1>
<p><font color="white">Please fill in this form to add new books.</font></p>
<hr>

<label><b>Book ID</b></label>
<input type="text" placeholder="Book ID" name="bid" required>

<label><b>Book Name</b></label>
<input type="text" placeholder="Book Name" name="name" required>

<label><b>Book Author</b></label>
<input type="text" placeholder="Book Author" name="authors"  required>

<label><b>Book Year</b></label>
<input type="text" placeholder="Book Year" name="year" required>

<label><b>Status</b></label>
<input type="text" placeholder="Status" name="status" required>

<label><b>Quantity</b></label>
<input type="text" placeholder="Quantity" name="quantity" required>

<label><b>Department</b></label>
<input type="text" placeholder="Department" name="department" required>

<hr>
<p><font color="white">By creating an account you agree to our </font><a href="#">Terms & Privacy</a>.</p>

<button type="submit" class="add-book-btn" name="submit">ADD</button>
</div>
</form>
<!--php-->
<?php
    if(isset($_POST['submit']))
    {
      if(isset($_SESSION['login_user']))
      {
        mysqli_query($db,"INSERT INTO books VALUES ('$_POST[bid]', '$_POST[name]', '$_POST[authors]', '$_POST[year]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;");
        ?>
          <script type="text/javascript">
            alert("Book Added Successfully.");
          </script>

        <?php

      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You need to login first.");
          </script>
        <?php
      }
    }
?>
</section>
<!--add books-->

</body>
</html>
