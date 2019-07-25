<?php $koneksi = mysqli_connect("localhost","root","","dbpenjualan"); ?>
<h2>Data Pembelian</h2>

<table class="table table-bordered"> 
	<thead>
		<tr>
			<th>No </th>
			<th>Kode Pelanggan</th>
			<th>Tanggal Pembelian</th>
			<th>Total Pembelian</th>
			<th>Aksi</th>
		</tr>
	</thead> 
	<tbody>
		 <?php $no = 1;
			$result = mysqli_query($koneksi,"SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan WHERE pembelian.id_pelanggan");
			if (!$result) {
				echo mysql_error($koneksi);
			}

			while( $pecah = mysqli_fetch_assoc($result)) {
		 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $pecah['id_pelanggan']; ?></td>
			<td><?php echo $pecah['tanggal_pembelian']; ?></td>
			<td><?php echo $pecah['total_pembelian']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pelanggan'];?>" class="btn-info btn">detail</a>
			</td>
		<?php } ?>
		</tr>
	</tbody> 
</table>