<?php 
session_start();
include 'connection.php';
if (isset($_POST['sub'])) {
	$short_text = $_POST['short_text'];
	$long_text = $_POST['long_text'];
	$price = $_POST['price'];
	$imgName = $_FILES['image']['name'];
	$name_to_save  = 'images/'.basename($_FILES['image']['name']);
	$user_id = $_SESSION['id'];
	move_uploaded_file($_FILES['image']['tmp_name'], $name_to_save);

	$sql = "INSERT INTO oglasi VALUES (NULL,'$user_id','$short_text','$long_text','$price')";
	$query = mysqli_query($db,$sql);
	$last_id = mysqli_insert_id($db);

	$sql2 = "INSERT INTO images VALUES (NULL,'$imgName','$last_id')";
	$query2 = mysqli_query($db,$sql2);

	header("Location: userAccount.php");
	 
}else{
	header("Location: userAccount.php");
}
 ?>
