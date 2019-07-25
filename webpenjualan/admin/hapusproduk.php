<?php 
$koneksi = mysqli_connect("localhost","root","","dbpenjualan");

$id = $_GET["id"];
$delete = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk = $id");

if (($id) > 0) {
	echo "
			<script>
			alert('Data berhasil di Hapus');
			window.location = 'index.php?halaman=produk';
			</script>
		";
}	else {

	echo "
			<script>
			alert('Data Gagal di Hapus');
			window.location = 'index.php?halaman=produk';
			</script>
		";
}


 ?>
 
 <?php 
$koneksi = mysqli_connect("localhost","root","","dbpenjualan");

$id = $_GET["id"];
$delete = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE id_pelanggan = $id");

if (($id) > 0) {
	echo "
			<script>
			alert('Data berhasil di Hapus');
			window.location = 'index.php?halaman=pelanggan';
			</script>
		";
}	else {

	echo "
			<script>
			alert('Data Gagal di Hapus');
			window.location = 'index.php?halaman=pelanggan';
			</script>
		";
}
  ?>