
<!--navbar-->
<nav class="navbar navbar-default">
	<div class="container">
	
		<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="keranjang.php">Keranjang</a></li>
			<!--jk sudah login(ada session pelanggn-->
			<?php if (isset($_SESSION["pelanggan"])); ?>
				<li><a href="riwayat.php">Riwayat Belanja</a></li>
				<li><a href="logout.php">Logout</a></li>
			<!--selainitu(blm login]blm session pelanggan) -->
			
				<li><a href="login.php">Login</a></li>
				<li><a href="daftar.php">Daftar</a></li>
		
			<li><a href="checkout.php">Checkout</a></li>
		</ul>
	</div>
</nav>