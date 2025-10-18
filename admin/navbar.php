<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
.topnav {
  overflow: hidden;
  background-color: #948b82;
  height: 48px;
}

.topnav a {
  float: left;
  display: block;
  color: white;
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
.login_user{
  text-align: right;
  padding-top: 0px;
}
.login_user a{
  float: right;
}
.logout{
  text-align: right;
  padding-top: 0px;
}
.logout a{
  float: right;
}

.profile{
  text-align: right;
  padding-top: 0px;
}
.profile a{
  float: right;
}
.profile img{
  height:30px;
  width:30px;
}
</style>
</head>
<body>

<!--navbar-->
<div class="topnav">
    <a class="active" href="HOME.php">LOWA STATE UNIVERSITY</a>
    <a href="Book.php">Books</a>
    <a href="REGISTER.php">Sign up</a>
    <a href="student.php">Student Info</a>
    <div class="logout">
    <a href="LOGOUT.php">Logout</a>
    </div>
    <div class="login_user" style="color:white;">
    <a href="profile.php">
    <?php
  if(isset($_SESSION['login_user']))
  {
  echo "Welcome ".$_SESSION['login_user'];
  }
  ?>
    </a>
    </div>
</div>
<!--navbar-->

</body>
</html>
