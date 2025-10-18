<?php
	include "connection.php";
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	body {
	  margin: 0;
	  font-family: "Lato", sans-serif;
		background: #6d77b5;
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
	  padding-top: 15px;
	  padding-right: 20px;
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
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 500px;
		}
		label
		{
			color: white;
		}
    .form1 button{
      margin: 0 40px;
    }
	</style>
</head>
<body>
	<!--navbar-->
	<div class="topnav">
	    <a class="active" href="HOME.php">LOWA STATE UNIVERSITY</a>
	    <a href="Book.php">Books</a>
	    <a href="REGISTER.php">Sign up</a>
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

<br>
	<h1 style="text-align:center; color: #fff;">Edit Information</h1>
	<?php

		$sql = "SELECT * FROM student WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result))
		{
			$first=$row['first'];
			$last=$row['last'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
			$contact=$row['contact'];
			$address=$row['address'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
  <br>
	<span style="color: white;">Welcome</span>
	<h4 style="color: white;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>

	<div class="form1">
		<form action="" method="post">

		<label><h4><b>First Name: </b></h4></label>
		<input class="form-control" type="text" name="first" value="<?php echo $first; ?>">

		<label><h4><b>Last Name:</b></h4></label>
		<input class="form-control" type="text" name="last" value="<?php echo $last; ?>">

		<label><h4><b>Username:</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password:</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Email:</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b>Contact No:</b></h4></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">

		<label><h4><b>Address:</b></h4></label>
		<input class="form-control" type="text" name="address" value="<?php echo $address; ?>">

		<br>
		<form method="post">
		<button name="submit" type="submit">Save</button>
	  </form>
  </div>
	<?php

		if(isset($_POST['submit']))
		{

			$first=$_POST['first'];
			$last=$_POST['last'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$address=$_POST['address'];

			$sql1= "UPDATE student SET first='$first', last='$last', username='$username', password='$password', email='$email', contact='$contact', address='$address' WHERE username='".$_SESSION['login_user']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>
