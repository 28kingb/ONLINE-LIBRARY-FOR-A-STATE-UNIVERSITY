<?php
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

<style type="text/css">
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color: white;
 		}
    .listofprofile{
      height: auto;
    }
    .listofprofile h2{
      color: #03040a;
      background: #ffffff;
      height: 110px;
      font-size: 50px;
    }
    .listofprofile table {
      border-collapse: collapse;
      width: 100%;
    }
    .listofprofile th{
      color: white;
    }
    .listofprofile th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #b7b8c7;
    }

    .listofprofile tr:hover {background-color: #b7b8c7;;}

</style>
</head>
<body>
<!--sidenav-->
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="Book.php">Book</a>
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

 			<?php
 			if(isset($_POST['submit1']))
 			{
 			?>
 			<script type="text/javascript">
 			window.location="edit.php"
 			</script>
 		  <?php
 			}
 			$q=mysqli_query($db,"SELECT * FROM student where username='$_SESSION[login_user]' ;");
 			?>
      <br>
 			<h1 style="text-align: center;">My Profile</h1>
 			<?php
 			$row=mysqli_fetch_assoc($q);
 			?>
 			<div style="text-align: center;">
	 		<h4>
      <br>
	 		<?php
      echo "WELCOME: " .$_SESSION['login_user']; ?>
	 		</h4>
 			</div>
      <br>

<!--profile-->
<section class="listofprofile">
 			<?php
 			echo "<b>";
 			echo "<table class='table table-bordered table-hover'>";
	 		echo "<tr style='background-color: #6db6b9e6;'>";
	 		echo "<td>";
	 		echo "<b> First_Name: </b>";
	 		echo "</td>";
	 		echo "<td>";
	 	  echo $row['first'];
	 		echo "</td>";
	 		echo "</tr>";

	 		echo "<tr>";
	 		echo "<td>";
	 		echo "<b> Last_Name: </b>";
	 		echo "</td>";
	 		echo "<td>";
	 		echo $row['last'];
			echo "</td>";
	 		echo "</tr>";

	 		echo "<tr>";
	 		echo "<td>";
	 		echo "<b> Username: </b>";
	 		echo "</td>";
	 		echo "<td>";
	 		echo $row['username'];
	 		echo "</td>";
	 		echo "</tr>";

	 		echo "<tr>";
	 		echo "<td>";
	 		echo "<b> Password: </b>";
	 		echo "</td>";
	 		echo "<td>";
	 		echo $row['password'];
	 		echo "</td>";
	 		echo "</tr>";

	 		echo "<tr>";
	 		echo "<td>";
	 		echo "<b> Email: </b>";
	 		echo "</td>";
	 		echo "<td>";
	 		echo $row['email'];
	 		echo "</td>";
	 		echo "</tr>";

	 		echo "<tr>";
	 		echo "<td>";
	 		echo "<b> Contact: </b>";
	 		echo "</td>";
	 		echo "<td>";
	 		echo $row['contact'];
	 		echo "</td>";
	 		echo "</tr>";

			echo "<tr>";
	 		echo "<td>";
	 		echo "<b> Address: </b>";
	 		echo "</td>";
	 		echo "<td>";
	 		echo $row['address'];
	 		echo "</td>";
	 		echo "</tr>";


 			echo "</table>";
 			echo "</b>";
 			?>
      <form method="post">
 			<button name="submit1" type="submit">Edit</button>
 		  </form>
</section>
<!--profile-->

</body>
</html>
