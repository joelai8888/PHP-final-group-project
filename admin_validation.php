<?php 
	$username = "";
	$id = "";
	$password = "";
	$errors = array();

	//connect to the database
	$db = mysqli_connect("localhost","root","","membersdb");

	//if the register button is clicked
	if (isset($_POST["sign_in"])) {
		$id = mysqli_real_escape_string($db, $_POST['id']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

		//To ensure that form fields are filled properly.
		if (empty($id)) {
			array_push($errors, "ID is required"); //add error to errors array.
		}
		if (empty($username)) {
			array_push($errors, "Username is required"); 
		}	
		if (empty($password_1)) {
			array_push($errors, "Password is required"); 
		}

	 }
 ?>