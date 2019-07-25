<?php 
$koneksi = mysqli_connect("localhost","root","","dbpenjualan");

$id = $_GET["id"];

$prdk = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk = $id");
	while($pecah= mysqli_fetch_assoc($prdk)) {;


if (isset($_POST["save"])) {

	


	$id = $_GET["id"];
	$namaproduk = htmlspecialchars($_POST['namaproduk']);
	$harga = $_POST['harga'];
	$gambar = $_POST['foto'];
	$stok = $_POST['stok'];
	$diskon = $_POST['diskon'];
	$keterangan = $_POST['keterangan'];

	$query = "UPDATE produk
				SET
	 			
	 				nama_produk = '$namaproduk',
	 				harga = '$harga',
	 				foto_produk = '$gambar',
	 				stok = '$stok',
	 				diskon = '$diskon',
	 				keterangan = '$keterangan'
	 				WHERE id_produk = $id
	 			
	 			";
	mysqli_query($koneksi, $query);

	
	if (mysqli_affected_rows($koneksi) > 0) {
		echo "
			<script>
			alert('Data berhasil di Ubah');
			window.location = 'index.php?halaman=produk';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data gagal di Ubah');
			window.location = 'index.php?halaman=produk';
			</script>
		";
		echo "<br>";
		echo mysqli_error($koneksi);
	}
	
		
}
 ?>

<h2>Ubah Produk</h2>

<form method="post" action="" >
	<input type="hidden" name="id" value="<?php echo $pecah["id_produk"]; ?>">
	<div>
		<label>Nama Produk</label>
		<input type="text" name="namaproduk" class="form-control" required value="<?php echo $pecah["nama_produk"]; ?>">
	</div>
	<div>
		<label>Harga </label>
		<input type="number" name="harga" class="form-control" required value="<?php echo $pecah["harga"]; ?>">
	</div>
	<div>
		<label>Gambar</label>
		<input type="file" name="foto" class="form-control"  required value="<?php echo $pecah["foto_produk"]; ?>" >
	</div>
	<div>
		<label>Stok</label>
		<input type="number" name="stok" class="form-control" required value="<?php echo $pecah["stok"]; ?>">
	</div>
	<div>
		<label>Diskon</label>
		<input type="number" name="diskon" class="form-control" required value="<?php echo $pecah["diskon"]; ?>">
	</div>
	<div>
		<label>Keterangan</label>
		<textarea class="form-control" name="keterangan" rows="10" required value="<?php echo $pecah["keterangan"]; ?>"></textarea>
	</div><br>
	<button class="btn btn-info" name="save">Ubah</button>
<?php } ?>
</form>










