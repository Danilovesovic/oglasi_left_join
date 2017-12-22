<?php require "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand">Login Test</a>
			<?php
			if (isset($_SESSION['id'])) {
				include "parts/loggedNav.php";
			}else{
			 include "parts/loginNav.php";
			}

			  ?>

		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
				<div class="col-lg-8 col-lg-offset-2">