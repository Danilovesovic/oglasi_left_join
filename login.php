<?php 
session_start();
require_once 'functions.php';
if (isset($_POST['sub'])) {
	if (!empty($_POST['password']) && !empty($_POST['email'])) {
		$password = $_POST['password'];
		$email = $_POST['email'];

		// TODO set login function
		$arr = loginUser($email,$password);
		$_SESSION['name'] = $arr['name'];
		$_SESSION['id'] = $arr['id'];


		header("Location: index.php");
		

	}else{
		
		$email = $_POST['email'];
		
		// set error
		// redirect back
		header("Location: loginForm.php?err=1&e=$email");
		// make error query *****
	}
}else{
	header("Location: 404.php");
}
 ?>
