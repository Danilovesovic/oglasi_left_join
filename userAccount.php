<?php 
session_start();
include 'parts/head.php';
include_once 'functions.php';
if (!isset($_SESSION['id'])) {
		header("Location: index.php");
	}
	
	$userOglasi = getAllFromOneUser($_SESSION['id']);
 ?>

	<h2 class="page-header"><?php echo $_SESSION['name']; ?></h2>

		<?php foreach($userOglasi as $oglas): ?>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center"><h4><?php echo $oglas["short_text"]; ?></h4></div>
					<div class="panel-body">
						<img src="images/<?php echo $oglas["img_name"] ?>" class="img-responsive">
					</div>
					<div class="panel-footer text-right"><button class="btn btn-warning"><?php echo $oglas["price"]; ?></button></div>
				</div>
			</div>
		<?php endforeach ?>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<form action="saveOneOglas.php" method="post" enctype="multipart/form-data">
					<input type="text" name="short_text" placeholder="short_text" class="form-control"><br>
					<input type="text" name="long_text" placeholder="long_text" class="form-control"><br>
					<input type="text" name="price" placeholder="price" class="form-control"><br>
					<input type="file" name="image"><br>
					<input type="submit" name="sub" class="btn btn-danger form-control">

				</form>
			</div>
		</div>
<?php include 'parts/footer.php'; ?>