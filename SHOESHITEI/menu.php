<nav class="navbar navbar-inverse" style="background-color: black;">	
		<div class="container">
			<div class="logo">
			<img src="logooo.png" width = "100" height="100">
		</div>
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="keranjang.php">Keranjang</a></li>
					<?php if(isset($_SESSION["pelanggan"])): ?>


					<li><a href="logout.php">Logout</a></li>
					<?php else: ?>

					<li><a href="login.php">Login</a></li>
					<li><a href="daftar.php">Daftar</a></li>
					<?php endif?>
					
					<li><a href="checkout.php">Checkout</a></li>
					<li><a href="aboutus.php">About Us</a></li>
				</ul>
		</div>
	</nav>
	