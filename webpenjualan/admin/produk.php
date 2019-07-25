<?php  $koneksi = mysqli_connect("localhost","root","","dbpenjualan");

$result = mysqli_query($koneksi,"SELECT * FROM produk");
		if (!$result) {
			echo mysql_error($koneksi);
		}

 ?>
<h2>Data Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Produk</th>
			<th>Nama Produk</th>
			<th>Harga Produk</th>
			<th>Foto Produk</th>
			<th>Stok</th>
			<th>Diskon</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
			while( $pecah = mysqli_fetch_assoc($result)) {
		 ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $pecah['id_produk']; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td>Rp.<?php echo number_format($pecah['harga']); ?></td>
			<td><img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" height="100"></td>
			<td><?php echo $pecah['stok']; ?></td>
			<td><?php echo $pecah['diskon']; ?>%</td>
			<td><?php echo $pecah['keterangan']; ?></td>
			<td>
				<a href="hapusproduk.php?id=<?php echo $pecah['id_produk']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				<a href="index.php?halaman=ubah&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-repeat "></i></a>
			</td>
		</tr>
			<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></a>
