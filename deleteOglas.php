<?php 
session_start();
include_once 'connection.php';
if (!isset(($_SESSION['id']))) {
	header("Location: upss.php");
}
$id = $_GET['id'];

$sql = "DELETE FROM oglasi WHERE id = '$id'";
$query = mysqli_query($db,$sql);

if ($query) {
	header("Location: index.php");
}else{
	header("Location: upss.php");
}