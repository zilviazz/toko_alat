<?php 
include 'header.php';
?>

<div class="form" style="padding-bottom: 250px;">
	<h2 style=" width: 100%;"><b>Register</b></h2>
	<form action="proses/register.php" method="POST">
		<div class="row">
				<div class="form-group">
					<label for="exampleInputPassword1">username</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username" required >
				
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>

					<label for="exampleInputPassword1">Retype-Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password" name="konfirmasi" required>
				
					<label for="exampleInputPassword1">Email</label>
					<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required>

					<!-- awalnya nama -->
					<label for="exampleInputPassword1">Date of birth</label>
					<input type="date" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir" name="nama" required>

					<!-- tidak ada di db -->
					<label for="exampleInputPassword1">Gender</label>
					<div>
    					<label class="radio-inline">
      					<input type="radio" name="gender" value="laki-laki" required> Laki-laki
    					</label>
    					<label class="radio-inline">
      					<input type="radio" name="gender" value="perempuan" required> Perempuan
    					</label>
  					</div>
					
					<!-- tidak ada di db -->
					<label for="exampleInputPassword1">Adrress</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="nama" required>

					<!-- tidak ada di db -->
					<label for="exampleInputPassword1">City</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kota" name="nama" required>

					<!-- tidak ada di db -->
					<label for="exampleInputPassword1">Connect no</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Connect no" name="nama" required>

					<label for="exampleInputPassword1">Pay-pal id :</label>
					<button type="submit" class="btn btn-success">Register</button>
				</div>
		</div>
	</form>
</div>

<?php 
include 'footer.php';
?>
<style>
.form {
  box-sizing: border-box;
  padding: 20px;
  border: 1px solid #ccc;
  background-color: white;
  border-radius: 10px;
  max-width: 650px;
  max-height: 750px;
  margin: 0 auto;
  margin-bottom: 20px;
}

/* Gaya untuk judul */
h2 {
  text-align: center;
  color: #333;
}

/* Gaya untuk tombol */
.btn {
  background-color: #ff8680;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

/* Gaya untuk radio button */
.radio-inline {
  margin-right: 10px;
}

/* Gaya untuk label */
label {
  color: #555;
  font-weight: bold;
}

/* Gaya untuk form input */
.form-control {
  margin-bottom: 10px;
}
</style>
