<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<style type="text/css">
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

<body style="background-color: #6d77b5;">
<br>
	<h1 style="text-align:center; color: #fff;">Edit Information</h1>
	<?php

		$sql = "SELECT * FROM admin WHERE username='$_SESSION[login_user]'";
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

			$sql1= "UPDATE admin SET first='$first', last='$last', username='$username', password='$password', email='$email', contact='$contact', address='$address' WHERE username='".$_SESSION['login_user']."';";

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
