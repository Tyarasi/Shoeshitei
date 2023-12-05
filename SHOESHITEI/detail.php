<?php
session_start();

$koneksi = mysqli_connect("localhost","root","","shoeshitei");

$id_produk = $_GET["id"];

$ambil = $koneksi->query("SELECT * FROM Produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body background="bg1.png">
<style type="text/css">
	.footer {
		background-color:black;
		min-height: 50px;
		font-style: oblique;
	}
</style>
<body>


<?php include'menu.php'?>
	
<!............Konten........>

<section class="Konten">
	<div class="container">
		<div class="row" style="background-color: white;">
			<div class="col-md-6">
				<img style="max-height: 10000px;" src="<?php
							if($id_produk==1){
								echo ("fotoproduk/Sneakers1.jpg");
							}elseif($id_produk==2){
								echo ("fotoproduk/cewe2.jpeg");
							}elseif($id_produk==3){
								echo ("fotoproduk/cewe1.jpeg");
							}elseif($id_produk==4){
								echo ("fotoproduk/Sneakers4.jpg");
							}elseif($id_produk==5){
								echo ("fotoproduk/cewe3.jpeg");
							}elseif($id_produk==6){
								echo ("fotoproduk/cewe4.jpeg");
							}elseif($id_produk==7){
								echo ("fotoproduk/Sneakers5.jpg");
							}elseif($id_produk==8){
								echo ("fotoproduk/SneakersKids.jpg");
							}elseif($id_produk==9){
								echo ("fotoproduk/SneakersKids2.jpg");
							}elseif($id_produk==10){
								echo ("fotoproduk/cewe5.jpeg");
							}?>" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 col-md-onnset-3">
				<h2><?php echo $detail["nama_produk"]?></h2>
				<h4>Rp.<?php echo number_format($detail['harga'])?>.00,-</h4>
				<h4>Ukuran : <?php echo number_format($detail['ukuran'])?></h4>

				<form method="post">
					<div class="form-group">
						<div class="input-group">
							<input type="number" min="1" class="form-control" name="jumlah" placeholder="Masukkan Jumlah Pembelian">
							<div class="input-group-btn">
								<button class="btn btn-primary" name="beli">Beli</button>
							</div>
						</div>
					</div>
				</form>


				<?php
				if (isset($_POST["beli"])) 
				{
					$jumlah = $_POST["jumlah"];
					$_SESSION["keranjang"][$id_produk] = $jumlah;

					echo "<script>alert('Produk Telah Masuk Ke Keranjang ');</script>";
					echo "<script>location='keranjang.php'</script>";
				}

				?>




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