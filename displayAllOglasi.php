<?php 
session_start();
include 'parts/head.php';
include_once 'functions.php';
if (!isset($_SESSION['id'])) {
		header("Location: upss.php");
	}
	$allOglasi = readAllOglasi();
	$admin = adminOrNot($_SESSION['id']);

 ?>

<?php foreach($allOglasi as $oglas): ?>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<h4><?php echo $oglas["short_text"]; ?></h4>
					</div>
					<div class="panel-body">
						<img src="images/<?php echo $oglas["img_name"] ?>" class="img-responsive">
					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-warning"><?php echo $oglas["price"]; ?></button>
						<?php if($admin): ?>
					<a href="deleteOglas.php?id=<?php echo $oglas['oglas_id']; ?>" class="btn btn-danger">Delete</a>
						<?php endif ?>
					</div>
				</div>
			</div>
				
<?php endforeach ?>

<?php include 'parts/footer.php'; ?>