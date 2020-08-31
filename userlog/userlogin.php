<?php session_start(); ?>
<?php include('../dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="userstyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3><center>USER LOGIN</center></h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="userlogin" value="User Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['userlogin']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
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
<a href="../index.php" class="btn btn-info" role="button">Back</a>
</div>

</body>
</html>