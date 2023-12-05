<?php
session_start();

$koneksi = mysqli_connect("localhost","root","","shoeshitei");

if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) 
{
	echo "<script>alert ('Silahkan Belanja Terlebih Dahulu')</script>";
	echo "<script>location='index.php';</script>";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Keranjang Belanja</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
</head>

<style type="text/css">
	.footer {
		background-color:black;
		min-height: 50px;
		font-style: oblique;
	}
</style>
<body>




	<?php include'menu.php'?>

	<section class="konten">
		<div class="container">
			<h1>Keranjang Belanja</h1>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Ukuran</th>
						<th>Jumlah</th>
						<th>Total Keseluruhan Belanja</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1;?>
					<?php foreach($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
						<!..Produk..->
						<?php
							$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
							$pecah = $ambil->fetch_assoc();
							$totalharga = $pecah['harga']*$jumlah;
						?>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $pecah['nama_produk']?></td>
						<td>Rp.<?php echo number_format($pecah['harga'])?>.00,-</td>
						<td><?php echo number_format($pecah['ukuran'])?></td>
						<td><?php echo $jumlah;?></td>
						<td>Rp.<?php echo number_format($totalharga)?>.00,-</td>
						<td><a href="hapuskeranjang.php?id=<?php echo $id_produk?>" class="btn btn-danger btn-xs">Hapus</a></td>
					</tr>
				</tbody>
					<?php $nomor++;?>
					<?php endforeach?>
			</table>

				<a href="index.php" class="btn btn-default">Lanjutkan Belanja</a>
				<a href="checkout.php" class="btn btn-primary">Pembayaran</a>
		</div>
	</section>
<br><br><br><br><br><br><br><br><br><br><br>
	<div class="footer">
	<center><p><font color="white">Copyright SHOEShi Tei Shop 2020</font></p></center>
	</div>
</body>
</html>