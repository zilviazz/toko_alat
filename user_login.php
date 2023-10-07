<?php 
	include 'header.php';
 ?>

<div class="thumbnail" style="padding-bottom: 100px; margin-left: 80px; padding-left: 20px;">
		<h2 style=" width: 100%;"><b>Login</b></h2>

<form action="proses/login.php" method="POST">
		<div class="form-group">
			<label for="exampleInputEmail1">User ID</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" style="width: 500px;">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Password</label>
			<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="pass" style="width: 500px;">
		</div>
		<button type="submit" class="btn btn-success">Login</button>
		<a href="register.php" class="btn btn-primary">Daftar</a>
	</form>
</div>


 <?php 
	include 'footer.php';
 ?>