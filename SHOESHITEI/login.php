<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","shoeshitei");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Pelanggan</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body background="bg.png">
<style type="text/css">
	.footer {
		background-color:black;
		min-height: 50px;
		font-style: oblique;
	}
</style>
<body>

<?php include'menu.php'?>


	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color:#0099FF;">
						<center><h3 class="panel-title"><b>Login</b></h3></center>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group">
								<label>Nama Pelanggan</label>
								<input type="nama" class="form-control" name="nama">
							</div>
							<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password">
							</div>
							<button class="btn btn-primary" name="masuk">Masuk</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	if (isset($_POST["masuk"])) 
	{
		$nama = $_POST['nama'];
		$password=$_POST['password'];

		$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE nama_pelanggan='$nama' AND password='$password'");

		$cekakun = $ambil->num_rows;

		if ($cekakun==1) 
		{
			$akun = $ambil->fetch_assoc();
			$_SESSION["pelanggan"] = $akun;

			echo "<script>alert('Berhasil Login :) ');</script>";
			echo "<script>location='checkout.php'</script>";
		}
		else
		{
			echo "<script>alert('Akun Tidak Diketemukan, Silahkan Coba Lagi');</script>";
			echo "<script>location='login.php'</script>";
		}
	}
	?>
<br><br><br><br><br><br><br><br><br>
	<div class="footer">
	<center><p><font color="white">Copyright SHOEShi Tei Shop 2020</font></p></center>
	</div>
</body>
</body>
</html>