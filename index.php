<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<?php 
include 'header.php';
?>
<!-- IMAGE -->
<div class="container-fluid" style="margin: 0;padding: 0;">
	<table>
		<tr>
			<td>
				<h2 class="datang">Selamat datang!</h2>
				<h4 class="text-left">Tempat di mana kesehatan dan kesejahteraan Anda menjadi prioritas utama. Kami adalah mitra yang andal untuk semua kebutuhan perawatan kesehatan dan kesejahteraan Anda. Temukan alat kesehatan terbaik untuk Anda dengan berbelanja di e-commerce kami.</h4>
				<a href="produk.php" class="btn btn-primary" role="button" style="margin-left: 50px;">Beli Sekarang</a> 
			</td>
			<td>
				<div class="image" style="margin-top: -21px">
				<img src="image/home/1.png" style="width: 500px;  height: 500px; float: right;">
				</div>
			</td>
		</tr>
	</table>
</div>
<br>
<br>

<!-- PRODUK TERBARU -->
<div class="container">
	<h2><b>Daftar Produk</b></h2>

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
						<h5><?= ($row['deskripsi']); ?></h5>
						<h5>Rp.<?= number_format($row['harga']); ?></h5>
						<div class="row">
							<div class="col-md-6">
								<a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-info btn-block">View</a> 
							</div>
							<?php if(isset($_SESSION['kd_cs'])){ ?>
								<div class="col-md-6">
									<a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-success btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
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
<br>
<br>
<br>
<br>
<?php 
include 'footer.php';
?>
<style>
	h4{
		font-family: poppins; 
		font-size: 15px; 
		padding-top: 10px; 
		padding-bottom: 10px; 
		margin-left: 50px;
	}
	h2{
		width: 100%; 
		margin-top: 40px;
		font-family: poppins;
		font-size: 30px; 
		margin-bottom: 20px; 
	}
	.datang{
		font-family: poppins; 
		font-size: 40px; 
		padding-top: 10px; 
		margin-left: 50px;
	}
</style>