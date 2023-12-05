<?php
session_start();

$koneksi = mysqli_connect("localhost","root","shoeshitei");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pelanggan Baru</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
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

	<?php include 'menu.php'?>
	<div class="container" style="background-color: white;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<center><h1 class="panel-title"><b>Daftar Pelanggan</b></h1></center>
				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-3">Nama</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nama" required="">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">No.Telp</label>
							<div class="col-md-7">
								<input type="number" class="form-control" name="notelp" required="">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Kota</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="kota" required="">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Kecamatan</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="kecamatan" required="">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Kelurahan</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="kelurahan" required="">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Password</label>
							<div class="col-md-7">
								<input type="password" class="form-control" name="password" required="">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-7 col-md-offset-2">
								<button class="btn btn-primary" name="daftar">Daftar Diri Anda !</button>	
							</div>
						</div>

					</form>

					<?php
						if (isset($_POST["daftar"])) 
						{
							$nama = $_POST["nama"];
							$notelp = $_POST["notelp"];
							$kota = $_POST["kota"];
							$kecamatan = $_POST["kecamatan"];
							$kelurahan = $_POST["kelurahan"];
							$password = $_POST["password"];

							$ambil = $koneksi->query("SELECT * FROM pelanggan
									WHERE nama_pelanggan='$nama'");
							if ($ceknama==1) 
							{

								echo "<script>alert('Daftar Gagal, Nama Sudah Ada')</script>";
								echo "<script>location='daftar.php'</script>";	
							}else
							{
								$koneksi->query("INSERT INTO pelanggan (nama_pelanggan,no_telp,kota,kecamatan,kelurahan,password)
												VALUES ('$nama','$notelp','$kota','$kecamatan','$kelurahan','$password')");

								echo "<script>alert('Pendaftaran Berhasil')</script>";
								echo "<script>location='login.php'</script>";
							}
						}
					?>

				</div>
			</div>
		</div>
	</div>
<br><br><br><br><br>
	<div class="footer">
	<center><p><font color="white">Copyright SHOEShi Tei Shop 2020</font></p></center>
	</div>
</body>
</body>
</html>