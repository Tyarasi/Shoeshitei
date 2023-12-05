<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","shoeshitei");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bukti Pesanan</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
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


			

	<div class="row">
		<div class="col-md-0"></div>
		<div class="col-md-5">
				<h3>Pelanggan</h3>
				<strong>Nama : <?php echo $_SESSION['pelanggan']['nama_pelanggan']?></strong>
				<p>
					Nomor Hp :0<?php echo $_SESSION['pelanggan']['no_telp']?><br>
					Alamat : Kel.<?php echo $_SESSION['pelanggan']['kelurahan']?>,Kec.<?php echo $_SESSION['pelanggan']['kecamatan']?>,Kota.<?php echo $_SESSION['pelanggan']['kota']?> 
				</p>
		</div>
		<div class="col-md-3">
				<h3>Pengiriman</h3>
				<strong>Pekanbaru</strong>
				<p>
					Ongkos Kirim : Rp.20.000.00,-<br>
				</p>
		</div>
	</div>
	<br>
	<br>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>
				No
			</th>
			<th>
				Jumlah Pesanan
			</th>
			<th>
				Total Harga Pesanan
			</th>
			<th>
				Tanggal Order
			</th>
			<th>
				Tanggal Pengiriman
			</th>
			<th>
				Tanggal Diterima
			</th>
		</tr>
	</thead>
		<tbody>
			<?php $nomor=1;?>
			<?php $ambil = $koneksi->query("SELECT * FROM pesanan 
						WHERE pesanan.id_pesanan='$_GET[id]'");?>
			<?php while ($pecah=$ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah['jumlah_pesanan']; ?></td>
				<td><?php echo $pecah['total_harga_pesanan']; ?></td>
				<td><?php echo $pecah['tanggal_order']; ?></td>
				<td><?php echo $pecah['tanggal_pengiriman']; ?></td>
				<td><?php echo $pecah['tanggal_diterima']; ?></td>
			</tr>
			<?php $nomor++;?>
			<?php } ?>
		</tbody>
</table>

<h2>Detail Pembelian</h2>

<?php
	$ambil = $koneksi->query("SELECT * FROM pesanan 
		WHERE pesanan.id_pesanan='$_GET[id]'");
	$detail = $ambil->fetch_assoc();
?>


<p>
	<strong>Jumlah Pesanan : <?php echo $detail['jumlah_pesanan'];?></strong><br>
	<strong>Total Keseluruhan : <?php echo $detail['total_harga_pesanan']?></strong>
</p><br>
<p>
	<strong>Tanggal Diorder nya Barang : <?php echo $detail['tanggal_order']?></strong><br>
	<strong>Tanggal Pengiriman Barang : <?php echo $detail['tanggal_pengiriman']?></strong><br>
	<strong>Tanggal Diterima Barang : <?php echo $detail['tanggal_diterima']?></strong><br>
	</p>


	<div class="row">
		<div class="col-md-7">
			<div class="alert alert-info">
				<p>
					Silahkan Melakukan Pembayaran Rp.<?php echo number_format($detail['total_harga_pesanan']);?>.00- Ke <br>
					<strong>BANK BCA 6428-9213-23 || AN.TEGUH AMANAH PUTRA</strong>
				</p>
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