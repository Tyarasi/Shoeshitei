<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","shoeshitei");

if (!isset($_SESSION["pelanggan"])) 
{
	echo "<script>alert('Ops, Anda Belum Login, Silahkan Login Terlebih Dahulu')</script>";
	echo "<script>location='login.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Check Out</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<style type="text/css">
	.footer {
		background-color:black;
		min-height: 50px;
		font-style: oblique;
	}
</style>
</head>
<body>

<?php include'menu.php'?>

	<section class="konten">
		<div class="container">
			<h1>Check Out</h1>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Sub Harga</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1;?>
					<?php $totalkeseluruhan = 0;?>
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
						<td><?php echo $jumlah;?></td>
						<td>Rp.<?php echo number_format($totalharga)?>.00,-</td>
					</tr>
					<?php $nomor++;?>
					<?php $totalkeseluruhan+= $totalharga?>
					<?php endforeach?>
				</tbody>
					<tfoot>
						<tr>
							<th colspan="4">Total Belanja</th>
							<th>Rp.<?php echo number_format($totalkeseluruhan)?>.00,-</th>
						</tr>
					</tfoot>
			</table>
			<form method="post">
					<div class="row">
				<div class="col-md-4">
					<div class="form-group">
							<input type="text" readonly value="<?php echo $_SESSION ["pelanggan"]['nama_pelanggan']?>" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
							<input type="text" readonly value="<?php echo $_SESSION ["pelanggan"]['no_telp']?>" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<select class="form-control" name="id_ongkir">
						<option value="">Pilih Area</option>
						<option value="">Pekanbaru Rp.20.000</option>
						<option value="" name="belum">Jakarta (Coming Soon)</option>
					</select>
				</div>
			</div>
					<button class="btn btn-primary" name="checkout">Checkout</button>			
			</form>
			

			<?php
				if (isset($_POST['checkout'])) 
				{
					
					$id_pelanggan = $_SESSION["pelanggan"]["pelanggan_id"];
					$tanggal_pembelian = date("d,F,Y");
					$id_ongkir = $_POST["id_ongkir"];


					$tanggal_pengiriman = $tanggal_pembelian;
					$tanggal_diterima = $tanggal_pembelian;
 						
 						$id_ongkir = 20000;

 						$totalharga = $totalkeseluruhan+$id_ongkir;

 					$id_ekspedisi = $id_pelanggan;
					
					$koneksi->query("INSERT INTO pesanan (jumlah_pesanan,total_harga_pesanan,tanggal_order,tanggal_pengiriman,tanggal_diterima,pelanggan_id,id_produk,id_ekspedisi)
									VALUES('$jumlah','$totalharga','$tanggal_pembelian','$tanggal_pengiriman','$tanggal_diterima','$id_pelanggan','$id_produk','$id_ekspedisi')");

						$id_pesanan_sabantako = $koneksi->insert_id;

						unset($_SESSION["keranjang"]);

						echo "<script>alert('Pembelian Sukses :D')</script>";
						echo "<script>location='nota.php?id=$id_pesanan_sabantako';</script>";
				}
			?>

		</div>
	</section>
<pre><?php ///print_r($_SESSION["keranjang"])?></pre>
<br><br><br><br><br>
	<div class="footer">
	<p><font color="white"><center>Copyright SHOEShi Tei Shop 2020</center></font></p>
	</div>
</body>
</body>
</html>