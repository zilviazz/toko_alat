<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<?php 
	include 'header.php';
    $selectedCategory = mysqli_real_escape_string($conn, $_GET['kategori']);

	// Retrieve the category name from the database
	$categoryQuery = mysqli_query($conn, "SELECT nama_kategori FROM kategori_produk WHERE id_kategori = '$selectedCategory'");
	$categoryRow = mysqli_fetch_assoc($categoryQuery);
	$categoryName = $categoryRow['nama_kategori'];
 ?>

<!-- PRODUK TERBARU -->
<div class="container">
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
<h2 style="width: 100%; font-family: poppins;"><b>Daftar Produk <?= $categoryName; ?></b></h2>

	<div class="row">
		<?php 
		// Modify the SQL query to fetch products based on the selected category
		$result = mysqli_query($conn, "SELECT * FROM produk WHERE id_kategori = '$selectedCategory'");
		
		// Check if the query was successful
		if ($result === false) {
			// Handle the error, e.g., by displaying an error message or logging it
			echo "Error: " . mysqli_error($conn);
		} else {
			// Fetch and display products
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
		}
		?>
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
