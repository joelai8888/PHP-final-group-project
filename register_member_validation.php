<?php 
	$username = "";
	$email = "";
	$id = "";
	$errors = array();

	//connect to the database
	$db = mysqli_connect("localhost","root","","membersdb");

	//if the register button is clicked
	if (isset($_POST["register"])) {
		$id = mysqli_real_escape_string($db, $_POST['id']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		//To ensure that form fields are filled properly.
		if (empty($id)) {
			array_push($errors, "ID is required"); //add error to errors array.
		}
		if (empty($username)) {
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) {
			array_push($errors, "Email is required"); 
		}		
		if (empty($password_1)) {
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match"); 
		}

		//if there are no errors, save user to database
		if (count($errors == 0)) { 
			$password = md5($password_1); //encrypt password before storing it in database (security)
			$sql = "INSERT INTO members_new (memberID ,memberName, memberEmail, memberPassword) VALUES ('$id','$username','$email','$password')";
			mysqli_query($db, $sql);
		}
	 }
 ?>