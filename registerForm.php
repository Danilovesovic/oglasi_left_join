<?php include 'parts/head.php'; ?>
<?php 
	if (isset($_GET['err'])) {
		$u = $_GET['u'];
		
		$e = $_GET['e'];
		$msg = "<h1 style='text-align:center;color:tomato'>All fields are required !</h1>";
	}else{
		$u = '';
		$p = '';
		$e = '';
		$msg = false;
	}
 ?>
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<h2 class="page-header">Registration form</h2>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<form action="register.php" method="post">
					<input type="text" name="username" placeholder="username" value="<?php echo $u ?>" class="form-control"><br>
					<input type="email" name="email" placeholder="email" value="<?php echo $e ?>" class="form-control"><br>
					<input type="password" name="password" placeholder="password"  class="form-control"><br>
					<input type="submit" name="sub" value="Register" class="form-control btn btn-primary">
				</form>
				<?php if($msg){ echo $msg;} ?>
			</div>
		</div>
	</div>
</div>

<?php include 'parts/footer.php'; ?>