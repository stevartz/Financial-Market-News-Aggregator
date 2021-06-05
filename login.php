<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/login.css">
	<!--Custom font for login text-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
	<title>Log in</title>
</head>

<body style="background-color: #E7E1D7;">

	<h1 style="margin-top: 2%; text-align: center;">Financial News Aggregator</h1>
	<h2 id="welcome_text">Login here</h2>


	<div id="login_form">
		<!-- Change the action to a post request later -->
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" id="username" name="Log-username" class="form-control" style="width: 500px;"
					placeholder="Enter username">
				<small>
					<div style="color: red;" id="username_warning"></div>
				</small>
			</div>
			<br><br>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" id="password" name="Log-password" style="width: 500px;" class="form-control" placeholder="Enter password">
				<small>
					<div style="color: red;" id="password_warning"></div>
				</small>
				<input type="checkbox" id="toggle_password">Show Password
			</div>
			<br><br>
			<button type="submit" value="Login" class="btn btn-primary" id="submit_btn">Log in</button>
		</form>

		
		


		<a href="signup.php" class="highlight">Haven't registered yet? Sign up here</a>
		<br><br>
		<script src="./js/login.js"></script>
		<?php include('./user_handling/user_authentication.php'); ?>
		
	</div>

	
	
	
</body>

</html>