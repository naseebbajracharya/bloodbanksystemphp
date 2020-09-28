<?php session_start(); ?>
<?php include('../dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="userstyles.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>

<div class="login">
			<h1>User Login</h1>
			<form action="#" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" required="required" placeholder="Username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" required="required" placeholder="Password" required>
				<input type="submit" name="userlogin" value="Login"> </input>
				<!-- <a href="../index.php" class="btn btn-info" role="button">Back</a> -->
			</form>
			
</div>


<?php
	if (isset($_POST['userlogin']))
		{
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			
			$query 		= mysqli_query($con, "SELECT * FROM donor WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:userdashboard.php');
					
				}
			else
				{
					echo 'Invalid Username and Password';
				}
		}
  ?>


</body>



</html>

