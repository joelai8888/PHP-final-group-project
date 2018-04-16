<?php include("admin_validation.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Club Membership Admin Login</h2>
	</div>
	<form method="post" action="admin.php">
		<?php include("errors.php");?>
		<div class="input-group">
			<label>Admin ID</label>
			<input type="text" name="id" value="<?php echo $id; ?>">
		</div>
		<div class="input-group">
			<label>Admin name</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" value="<?php echo $password; ?>">
		</div>
		<div class="input-group">
			<button type="submit" name="sign_in" class="btn">Login</button>
		</div>
		<p>You are a member? <a href="login.php">Sign in Now</a></p>
	</form>
</body>
</html>