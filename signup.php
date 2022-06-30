<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/make.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

	<h1>SIGN UP</h1>
	<p>create your account and start interacting with the world</p>

<div class="box">
	<form action="" method="post">
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="xyz@some.com">
		</div>
		<div class="form-group">
			<label>password</label>
			<input type="password" class="form-control" name="user_pass" placeholder="password">
		</div>
		<div class="form-group">
			<label>confirm password</label>
			<input type="password" class="form-control" name="check_user_pass" placeholder="password">
		</div>
		<div class="form-group">
			<label>USER NAME</label>
			<input type="text" class="form-control" name="user_name" placeholder="example: madris">
		</div>
		<div class="form-group">
			<label>country</label>
			<input type="text" class="form-control" name="country" placeholder="example: INDIA">
		</div>
		<div class="form-group">
			<label>age</label>
			<input type="text" class="form-control" name="age" placeholder="20">
		</div>
		<button class="btn btn-primary" name="sign_up">submit</button>
		<?php include("signup_user.php"); ?>
    </form>
    </div>	
    <p>already have an account</p>
    <a class="btn btn-primary" href="signin.php">click here</a>	

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

<!-- zxc11234 -->