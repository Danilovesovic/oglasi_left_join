<?php 
require_once 'connection.php';


function registerUser($username,$password,$email)
{
	global $db;
	$sql = "INSERT INTO users VALUES (NULL,'$username','$password','$email',0)";
	$query = mysqli_query($db, $sql);

	return $query;

}

function loginUser($email,$password)
{
	global $db;
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$query = mysqli_query($db,$sql);

	if (mysqli_num_rows($query) == 1) {
		$result = mysqli_fetch_assoc($query);
		return ['id' => $result['id'],'name'=>$result['username']];
	}else{
		echo "User Not found";
	}
}

function getAllFromOneUser($id)
{
	global $db;
	$sql = "SELECT * FROM `oglasi` LEFT JOIN images ON oglasi.id = images.oglas_id WHERE oglasi.user_id = '$id'";
	$query = mysqli_query($db, $sql);
	$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

	return $result;
}

function readAllOglasi()
{
	global $db;
	$sql = "SELECT * FROM `oglasi` LEFT JOIN images ON oglasi.id = images.oglas_id";
	$query = mysqli_query($db, $sql);
	$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

	return $result;

}
function adminOrNot($id)
{
	global $db;
	$sql = "SELECT * FROM users WHERE id='$id'";
	$query = mysqli_query($db,$sql);
	$result = mysqli_fetch_assoc($query);
	$admin = $result['admin'];

	if ($admin) {
		return true;
	}else{
		return false;
	}
}