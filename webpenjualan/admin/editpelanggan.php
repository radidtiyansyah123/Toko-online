<?php 
$koneksi = mysqli_connect("localhost","root","","dbpenjualan");

$id = $_GET["id"];

$prdk = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan = $id");
	while($pecah= mysqli_fetch_assoc($prdk)) {;


if (isset($_POST["save"])) {


	$id = $_GET["id"];
	$namapelanggan = htmlspecialchars($_POST['namapelanggan']);
	$email = htmlspecialchars($_POST['email']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$pass = htmlspecialchars($_POST['password']);
	$nohp = $_POST['nohp'];


	$query = "UPDATE pelanggan
				SET
	 			email = '$email',
	 			alamat = '$alamat',
	 			pass = '$pass',
	 			nama_pelanggan = '$namapelanggan',
	 			no_telepon = '$nohp'
	 			WHERE id_pelanggan
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

<h2>Edit Pelanggan</h2>

<form method="post" action="" >
	
	<div>
		<label>Kode Pelanggan</label>
		<input type="text" name="kodepelanggan" class="form-control" required readonly value="<?= $pecah['id_pelanggan']?>">
	</div>
	<div>
		<label>Nama Pelanggan</label>
		<input type="text" name="namapelanggan" class="form-control" required value="<?= $pecah['nama_pelanggan']?>">
	</div>
	<div>
		<label>Email</label>
		<input type="text" name="email" class="form-control" required enctype="multipart/form-data" value="<?= $pecah['email']?>">
	</div>
	<div>
		<label>Password</label>
		<input type="text" name="password" class="form-control" required value="<?= $pecah['pass']?>">
	</div>
	<div>
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" required value="<?= $pecah['alamat']?>">
	</div>
	<div>
		<label>No Telepon</label>
		<input type="number" name="nohp" class="form-control" required value="<?= $pecah['no_telepon']?>">
	</div><br>
	<button href= "" class="btn btn-info" name="save">Simpan</button>
<?php } ?>
</form>


