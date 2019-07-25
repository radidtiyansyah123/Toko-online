<?php 
$koneksi = mysqli_connect("localhost","root","","dbpenjualan");

$result = mysqli_query($koneksi,"SELECT * FROM produk");
		if (!$result) {
			echo mysql_error($koneksi);
		}


 ?>


<!DOCTYPE html>
<html>
<head>
		<style type="text/css">
		</style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>TokoOnline</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<style>
			body{
				background-image: url(img/2.png);
				background-repeat: repeat-x;
			}
			.content {
				width: auto;
     height: auto;
     margin: 0 auto;
     position: relative;
     z-index: 5;
     background: #fff;
     padding: 30px;
     text-align: left;
     
			}
		</style>
<body>
	<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">		
  <a class="navbar-brand" href="#">Toko Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" >
      <a class="nav-item nav-link active" href="index.php">Home</a>
      <a class="nav-item nav-link active" href="keranjang.php">Keranjang</a>
      <a class="nav-item nav-link active" href="login.php">Login</a>
      <a class="nav-item nav-link active" href="login.php">Chekout</a>
    </div>
  </div>
</div>
</nav>


<div class="container">
<div class="content">
	<h1>Produk Terbaru</h1>
<div class="row">
	<?php $no = 1;
			while( $pecah = mysqli_fetch_assoc($result)) {
		 ?>
		<div class="col-md-3">
			<img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" height="100">
			<h4><?php echo $pecah['nama_produk']; ?></h4>
			<p>Rp.<?php echo number_format($pecah['harga']); ?></p>
			<a href="beli.php?id=<?=   $pecah['id_produk']; ?>" class="btn btn-primary">Beli</a>
		</div>
	<?php } ?>
	</div>
</div>
</div>
</div>










	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- MORRIS CHART SCRIPTS -->
	<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
	<script src="assets/js/morris/morris.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>
</body>
</html>
