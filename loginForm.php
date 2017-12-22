<?php include 'parts/head.php'; ?>
<?php 
	if (isset($_GET['err'])) {
		$e = $_GET['e'];
		$msg = "<h1 style='text-align:center;color:tomato'>All fields are required !</h1>";
	}else{
		$e = '';
		$msg = false;
	}
 ?>
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<h2 class="page-header">Login form</h2>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<form action="login.php" method="post">
					<input type="email" name="email" placeholder="email" value="<?php echo $e ?>" class="form-control"><br>
					<input type="password" name="password" placeholder="password"  class="form-control"><br>
					<input type="submit" name="sub" value="Login" class="form-control btn btn-success">
				</form>
				<?php if($msg){ echo $msg;} ?>
			</div>
		</div>
	</div>
</div>

<?php include 'parts/footer.php'; ?>