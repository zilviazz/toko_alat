<?php 
	include 'header.php';
 ?>
<head>
<title>Zilvi Medical</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<script  src="js/jquery.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<!-- <div class="thumbnail" style="padding-bottom: 100px; margin-left: 80px; padding-left: 20px;"> -->
		<h2 style=" width: 100%; text-align: center; font-family: poppins; margin-top: 50px;"><b>Selamat datang di ZILVI MEDICAL</b></h2>
<div class="isi">
	<h2 style="text-align: center;">LOGIN</h2>
<form action="proses/login.php" method="POST">
		<div class="form-group">
			<label for="exampleInputEmail1">User ID</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" style="width: 500px;">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Password</label>
			<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="pass" style="width: 500px;">
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
		<a href="register.php" class="btn btn-info">Register</a>
	</form>
</div>
</div>


 <?php 
	include 'footer.php';
 ?>

 <style>
	 *{
		 margin: 0;
		 padding: 0;
		 box-sizing: border-box;
		 font-family : poppins;
	 }
	 .isi {
	  margin: 0 auto;
      border: solid 1px gray;
	  border: 1 px;
      width: 550px;
      padding: 2%;
      border-radius: 10px;
	  margin-top: 20px;
	  margin-bottom: 70px;
    }
 </style>