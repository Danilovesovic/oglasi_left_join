<?php 
session_start();
include 'parts/head.php';
 ?>


<?php
	if (isset($_SESSION['id'])) {
		header("Location: displayAllOglasi.php");
	}else{
 		include 'parts/welcome.php';
	}

  ?>		

<?php include 'parts/footer.php'; ?>