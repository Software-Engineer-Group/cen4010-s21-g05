<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from database
			$query = "select * from defaultuser where user_name = '$user_name'";
			$result = mysqli_query($con, $query);
			if($result)	//query executed successfully
			{
				if(mysqli_num_rows($result) > 0)	//rows found
				{
					while($user_data=mysqli_fetch_assoc($result))	//get one row
					{
						echo $user_data['password'];
						if(password_verify($password,$user_data['password']))	//verify password from row
						{
							$_SESSION['user_id'] = $user_data['user_id'];
							header("Location: index.php");
							die;
						}
						else
						{
							echo "Incorrect password!";
						}
					}
				}
				
				// {

				// 	$user_data = mysqli_fetch_assoc($result);
					
				// 	if($user_data['password'] === $password)
				// 	{

				// 		$_SESSION['user_id'] = $user_data['user_id'];
				// 		header("Location: index.php");
				// 		die;
				// 	}
				// }
			}
			else
			{
				echo "Username not found!";
			}		
		}
		else
		{
			echo "Invalid!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<form method="post">
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/red.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
			
					<span class="login100-form-title p-b-49">
					<img src="chatflixlogo2.jpg" alt="chatflix logo" style="width:100%">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="user_name" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div><br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div><br>
</form>


					<a href="signup.php" class="txt2">Click to Signup</a><br><br>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>