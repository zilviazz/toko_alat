<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<?php 
	include 'header.php';
	// $kd = mysqli_real_escape_string($conn,$_GET['id_kategori']);
	// $kt = mysqli_query($conn, "SELECT * FROM kategori_produk WHERE id_kategori = '$kd'");
	// $rows = mysqli_fetch_assoc($kt);
 ?>

<!-- PRODUK TERBARU -->
<div class="container">
	<div class="row">
		<!-- Categories on the left -->
		<div class="col-md-3">
			<div class="category">
				<h2>Kategori</h2>
				<ul>
					<?php 
						$result1 = mysqli_query($conn, "SELECT * FROM kategori_produk");
						while($row = mysqli_fetch_assoc($result1)){
					?>
					<li><a href="kategori_proses.php?kategori=<?= $row['id_kategori']; ?>"><?= $row['nama_kategori']; ?></a></li>
					<?php 
						}
					?>
				</ul>
			</div>
		</div>
		<!-- Products on the right using a table -->
		<div class="col-md-9">
			<h2 style="width: 100%; font-family: poppins;"><b>Daftar Semua Produk</b></h2>
			<div class="row">
		<?php 
		$result = mysqli_query($conn, "SELECT * FROM produk");
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="image/produk/<?= $row['image']; ?>" >
					<div class="caption">
						<h3><?= $row['nama'];  ?></h3>
						<h6><?= ($row['deskripsi']); ?></h6>
						<h4><b>Rp.<?= number_format($row['harga']); ?></b></h4>
						<div class="row">
							<div class="col-md-6">
								<a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-info btn-block">View</a> 
							</div>
							<?php if(isset($_SESSION['kd_cs'])){ ?>
								<div class="col-md-6">
									<a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-primary btn-block" role="button">Buy</a>
								</div>
								<?php 
							}
							else{
								?>
								<div class="col-md-6">
									<a href="keranjang.php" class="btn btn-primary btn-block" role="button"></i>Buy</a>
								</div>
								<?php 
							}
							?>

						</div>
					</div>
				</div>
			</div>
			<?php 
		}
		?>
	</div>
		</div>
	</div>
</div>

 <?php 
	include 'footer.php';
 ?>

 <style>
	body{
		font-family: poppins;
	}
 </style>
