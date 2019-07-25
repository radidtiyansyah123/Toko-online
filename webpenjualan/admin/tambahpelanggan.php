<?php 
$koneksi = mysqli_connect("localhost","root","","dbpenjualan");

if (isset($_POST["save"])) {

	$namapelanggan = htmlspecialchars($_POST['namapelanggan']);
	$email = htmlspecialchars($_POST['email']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$password = htmlspecialchars($_POST['password']);
	$nohp = $_POST['nohp'];


	$query = "INSERT INTO pelanggan
				VALUES
	 			('','$email','$alamat','$password','$namapelanggan',
	 				 			'$nohp')
	 			";
	$b = mysqli_query($koneksi, $query);

	if (mysqli_affected_rows($koneksi) > 0) {
		echo "
			<script>
			alert('Data berhasil di input');
			window.location = 'index.php?halaman=pelanggan';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data gagal di input');
			window.location = 'index.php?halaman=pelanggan';
			</script>
		";
		echo "<br>";
		echo mysqli_error($koneksi);
	}
	
		
}
 ?>

<h2>Tambah Pelanggan</h2>

<form method="post" action="" >
	
	<div>
		<label>Kode Pelanggan</label>
		<input type="text" name="kodepelanggan" class="form-control" required readonly>
	</div>
	<div>
		<label>Nama Pelanggan</label>
		<input type="text" name="namapelanggan" class="form-control" required>
	</div>
	<div>
		<label>Email</label>
		<input type="text" name="email" class="form-control" required enctype="multipart/form-data">
	</div>
	<div>
		<label>Password</label>
		<input type="text" name="password" class="form-control" required>
	</div>
	<div>
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" required>
	</div>
	<div>
		<label>No Telepon</label>
		<input type="number" name="nohp" class="form-control" required>
	</div><br>
	<button href= "" class="btn btn-info" name="save">Simpan</button>
</form>










