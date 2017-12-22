<?php 
require_once 'functions.php';
if (isset($_POST['sub'])) {
	if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		// TODO set register function

		if (registerUser($username,$password,$email)) {
			header("Location: loginForm.php");
		}else{
			header("Location: upss.php");
		}
		

	}else{
		$username = $_POST['username'];
		
		$email = $_POST['email'];
		
		// set error
		// redirect back
		header("Location: registerForm.php?err=1&u=$username&e=$email");
		// make error query *****
	}
}else{
	header("Location: 404.php");
}
 ?>
