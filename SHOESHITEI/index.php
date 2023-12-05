<?php
session_start();
$koneksi = mysqli_connect("localhost","root","shoeshitei");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoeshitei Shop</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body background="bg1.png">
<style type="text/css">
	.footer {
		background-color:black;
		min-heiht: 50px;
		font-style: oblique;
	}
</style>
<body>



	<?php include'menu.php'?>

	<!........Konten ..........>

		<section class="konten">
			<div class="container">
				<center><bold><h1>SHOEShi Tei Product</h1></bold></center>
					<div class="row">


						<?php $ambil = $koneksi->query("SELECT * FROM produk");?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-height: 200px;" src="fotoproduk/Sneakers1.jpg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>
						</div>

						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='2'");
						$perproduk = $ambil->fetch_assoc()?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-height: 200px;" src="fotoproduk/cewe2.jpeg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>
						</div>

						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='3'");?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-heiht: 200px;" src="fotoproduk/cewe1.jpeg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>
						</div>



						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='4'");?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-height: 200px;" src="fotoproduk/Sneakers4.jpg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>


						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='5'");?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-height: 200px;" src="fotoproduk/cewe3.jpeg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>



						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='6'");?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-height: 200px;" src="fotoproduk/cewe4.jpeg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>
						</div>


						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='7'");?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-height: 200px;" src="fotoproduk/Sneakers5.jpg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>
						</div>



						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='8'");?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-height: 200px;" src="fotoproduk/SneakersKids.jpg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>
						</div>



						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='9'");?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-height: 200px;" src="fotoproduk/SneakersKids2.jpg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>
						</div>



						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='10'");?>
						<div class="col-md-3">
							<div class="thumbnail" style="background-color:black;">
								<div class="panel-body" style="text-align: center; overflow: hidden; padding: 0;">
								<img style="max-height: 200px;" src="fotoproduk/cewe5.jpeg">
								</div>
								<div class="caption">
									<h3><font color ="white"><?php echo $perproduk['nama_produk']?></h3>
									<h5>Rp.<?php echo number_format($perproduk['harga'])?>.00,-</h5>
									<h5>Ukuran : <?php echo number_format($perproduk['ukuran'])?></font></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
								</div>
							</div>
						</div>
			</div>

		</section>
<br><br><br><br><br>
	<div class="footer">
	<center><p><font color="white">Copyright SHOEShi Tei Shop 2020</font></p></center>
	</div>
</body>
</body>
</html>