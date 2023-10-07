<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<?php 
include 'header.php';
?>


<div class="container">
	<h2 style=" width: 100%;"><b>Master Produk</b></h2>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Kode Produk</th>
					<th scope="col">Nama Produk</th>
					<th scope="col">Gambar</th>
					<th scope="col">Harga</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$result = mysqli_query($conn, "SELECT * FROM produk");
				$no =1;
				while ($row = mysqli_fetch_assoc($result)) {
				?>
					<tr>
						<td ><?= $no; ?></td>
						<td><?= $row['kode_produk']; ?></td>
						<td><?= $row['nama'];  ?></td>
						<td><img src="../image/produk/<?= $row['image']; ?>" width="100"></td>
						<td>Rp.<?= number_format($row['harga' ]);  ?></td>
						<td><a href="edit_produk.php?kode=<?= $row['kode_produk']; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> </a> <a href="proses/del_produk.php?kode=<?= $row['kode_produk']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ?')"><i class="glyphicon glyphicon-trash"></i> </a></td>
					</tr>
				<?php
					$no++; 
					}
				 ?>

				</tbody>
			</table>
		<a href="tm_produk.php" class="btn btn-primary" style="float: right;"> Tambah Produk</a>
	</div>
	<!-- Button trigger modal -->

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<?php 
	include 'footer.php';
	?>

	<style>
		body{
			font-family: poppins;
		}
	</style>