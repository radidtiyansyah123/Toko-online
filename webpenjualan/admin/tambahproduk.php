<?php 
$koneksi = mysqli_connect("localhost","root","","dbpenjualan");

if (isset($_POST["save"])) {


	$namaproduk = htmlspecialchars($_POST['namaproduk']);
	$harga = $_POST['harga'];
	$gambar = $_POST['foto'];
	$stok = $_POST['stok'];
	$diskon = $_POST['diskon'];
	$keterangan = $_POST['keterangan'];

	$filename = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	move_uploaded_file($tmp, "../foto_produk/" . $filename);

	$query = "INSERT INTO produk
				VALUES
	 			('','$namaproduk','$harga','$filename','$stok',
	 			$diskon,'$keterangan')
	 			";
	mysqli_query($koneksi, $query);

	

	if (mysqli_affected_rows($koneksi) > 0) {
		echo "
			<script>
			alert('Data berhasil di input');
			window.location = 'index.php?halaman=produk';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data gagal di input');
			window.location = 'index.php?halaman=produk';
			</script>
		";
		echo "<br>";
		echo mysqli_error($koneksi);
	}
	
		
}
 ?>

<h2>Tambah Produk</h2>

<form method="post" action="" enctype="multipart/form-data">
	
	<div>
		<label>Nama Produk</label>
		<input type="text" name="namaproduk" class="form-control" required="Mohon di isi kolom Nama Produk!">
	</div>
	<div>
		<label>Harga </label>
		<input type="number" name="harga" class="form-control" required>
	</div>
	<div>
		<label>Gambar</label>
		<input type="file" name="foto" class="form-control" required >
	</div>
	<div>
		<label>Stok</label>
		<input type="number" name="stok" class="form-control" required>
	</div>
	<div>
		<label>Diskon</label>
		<input type="number" name="diskon" class="form-control" required>
	</div>
	<div>
		<label>Keterangan</label>
		<textarea class="form-control" name="keterangan" rows="10" required></textarea>
	</div><br>
	<button class="btn btn-info" name="save">Simpan</button>
</form>










