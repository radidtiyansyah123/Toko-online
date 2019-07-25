<?php $koneksi = mysqli_connect("localhost","root","","dbpenjualan"); 

$result = mysqli_query($koneksi,"SELECT * FROM pelanggan");
			if (!$result) {
				echo mysql_error($koneksi);
			}


?>


<h2>Data Pelanggan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Pelanggan</th>
			<th>Nama Pelanggan</th>
			<th>Email </th>
			<th>Password</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
			
			while( $pecah = mysqli_fetch_assoc($result)) {
		 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $pecah['id_pelanggan'] ?></td>
			<td><?php echo $pecah['nama_pelanggan'] ?></td>
			<td><?php echo $pecah['email'] ?></td>
			<td><?php echo $pecah['pass'] ?></td>
			<td><?php echo $pecah['alamat'] ?></td>
			<td><?php echo $pecah['no_telepon'] ?></td>
			<td>
				<a href="hapuspelanggan.php?id=<?php echo $pecah['id_pelanggan']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				<a href="index.php?halaman=editpelanggan&id=<?php echo $pecah['id_pelanggan']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-repeat "></i></a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpelanggan" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></a>