<?php include("current_member_validation.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Club Membership Registration</h2>
	</div>
	<form method="post" action="login.php">
		<?php include("errors.php");?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" value="<?php echo $password; ?>">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>Not yet a member? <a href="register_member.php">Register Now</a></p>
		<p>You are an admin? <a href="admin.php">Sign in Now</a></p>
	</form>
</body>
</html>
