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
.topnav2 {
  overflow: hidden;
  background-color: #e9e9e9;
  height: 50px;
}

.topnav2 a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav2 a:hover {
  background-color: #ddd;
  color: black;
}

.topnav2 a.active {
  background-color: #2196F3;
  color: white;
}

.topnav2 .search-container {
  float: right;
}

.topnav2 input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav2 .search-container button {

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

.topnav2 .search-container button:hover {
  background: #132178;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav2 a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav2 input[type=text] {
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
</style>
</head>
<body>

<!--sidenav-->
<div class="topnav2">
<div class="search-container">
<form  method="post" name="form1">
<input class="form-control-delete" type="text" placeholder="Search username...." name="search">
<button type="submit" name="submit">Search</button>
<br>
</form>
</div>
</div>
<!--sidenav-->

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

<!--List of books-->
<section class="listofbooks">
<h2 style="text-align:center;"><br>List Of Students Fines</h2>
<br>
<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * FROM `fine` where username like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
        echo "<th>"; echo " Username ";	echo "</th>";
				echo "<th>"; echo " Status ";  echo "</th>";
				echo "<th>"; echo " BID ";  echo "</th>";
				echo "<th>"; echo " Returned ";  echo "</th>";
				echo "<th>"; echo " Day ";  echo "</th>";
				echo "<th>"; echo " Fine in LKR";  echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";

        echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['returned']; echo "</td>";
				echo "<td>"; echo $row['day']; echo "</td>";
				echo "<td>"; echo $row['fine']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
	$res=mysqli_query($db,"SELECT * FROM `fine`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
        echo "<th>"; echo " Username ";	echo "</th>";
        echo "<th>"; echo " Status ";  echo "</th>";
        echo "<th>"; echo " BID ";  echo "</th>";
        echo "<th>"; echo " Returned ";  echo "</th>";
        echo "<th>"; echo " Day ";  echo "</th>";
        echo "<th>"; echo " Fine in LKR";  echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";

        echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['returned']; echo "</td>";
				echo "<td>"; echo $row['day']; echo "</td>";
				echo "<td>"; echo $row['fine']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}

	?>
</section>
<!--List of books-->
</body>
</html>
