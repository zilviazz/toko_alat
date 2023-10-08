<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<?php 
include 'header.php';
$kd = mysqli_real_escape_string($conn,$_GET['kode_cs']);
$cs = mysqli_query($conn, "SELECT * FROM customer WHERE kode_customer = '$kd'");
$rows = mysqli_fetch_assoc($cs);
?>

<div class="container" style="padding-bottom: 200px">
	<h2 style=" width: 100%; font-family: poppins;"><b>ZILVI MEDICAL</b></h2>
	<h3 style=" width: 100%; font-family: poppins;"><b>Laporan Belanja Anda</b></h3>
	<div class="row">
		<div class="">
			<table class="table">
				<?php 
					$result1 = mysqli_query($conn, "SELECT * FROM customer WHERE kode_customer = '$kd'");
					while($row = mysqli_fetch_assoc($result1)){
						?>
						<tr>
							<td>Kode Pelanggan</td>
							<td>:</td>
							<td><?= $row['kode_customer']; ?></td>
							<td>Tanggal</td>
							<td>:</td>
							<td>8 Oktober 2023</td>
						</tr>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><?= $row['nama']; ?></td>
							<td>ID Paypal</td>
							<td>:</td>
							<td><?= $row['paypal']; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><?= $row['alamat']; ?></td>
							<td>No. HP</td>
							<td>:</td>
							<td><?= $row['telp']; ?></td>
							<!-- <td>Nama Bank</td>
							<td>:</td>
							<td>BRI</td> -->
						</tr>
						<tr>
							<!-- <td>No. HP</td>
							<td>:</td>
							<td><?= $row['telp']; ?></td> -->
							<!-- <td>Cara Bayar</td>
							<td>:</td>
							<td>Prepaid</td> -->
						</tr>
						<?php 
						
					}
					?>
				</table>
			<h4><b>Daftar Pesanan</b></h4>
			<table class="table table-stripped">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Total</th>
				</tr>
				<?php 
				$result = mysqli_query($conn, "SELECT * FROM keranjang WHERE kode_customer = '$kd'");
				$no = 1;
				$hasil = 0;
				while($row = mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama_produk']; ?></td>
						<td><?= $row['qty']; ?></td>
						<td>Rp.<?= number_format($row['harga'] * $row['qty']);  ?></td>
					</tr>
					<?php 
					$total = $row['harga'] * $row['qty'];
					$hasil += $total;
					$no++;
				}
				?>
				<tr>
					<td colspan="5" style="text-align: left; font-weight: bold;">Total belanja (termasuk pajak): <?= number_format($hasil); ?></td>
				</tr>
				<tr>
					<td colspan="5" style="text-align: right; font-weight: bold;">TTD ZILVI MEDICAL</td>
				</tr>
			</table>
			
		</div>

	</div>
	<form action="proses/order.php" method="POST">

		<a href="" onclick="window.print()" class="btn btn-default"><i class="glyphicon glyphicon-print"></i> Cetak Invoice</a>
		<a href="keranjang.php?hapus_keranjang=<?= $kd; ?>" class="btn btn-danger">Back</a>
	</form>
</div>


<?php 
include 'footer.php';
?>


 <style>
	body{
		font-family: poppins;
	}
	h2{
		text-align: center;
	}
	h3{
		text-align: center;
	}
 </style>