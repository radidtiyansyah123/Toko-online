<?php 
session_start();



echo "<pre>";
print_r($_SESSION['keranjang']);
echo "</pre>";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<title>Keranjang</title>
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
		<h1>Keranjang belanja</h1>
		<br>
		<table class="table table-bordered">
			<thead>
					
				<tr>
					<th>No</th>
					<th>Produk</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subharga</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($_SESSION['keranjang'] as $id => $jumlah): ?>
				<tr>
					<td>x</td>
					<td>x</td>
					<td>x</td>
					<td>x</td>
					<td>x</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>











 </body>
 </html>